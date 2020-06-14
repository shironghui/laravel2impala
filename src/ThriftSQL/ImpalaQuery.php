<?php

namespace Semir\Laravel2impala\ThriftSQL;

use Semir\Laravel2impala\ThriftGenerated\ImpalaServiceIf;
use Semir\Laravel2impala\ThriftGenerated\Query;
use Semir\Laravel2impala\ThriftGenerated\QueryState;
use Semir\Laravel2impala\ThriftSQL\Utils\QueryCleaner;
use Semir\Laravel2impala\ThriftSQL\Utils\Sleeper;

class ImpalaQuery extends Query {

  private $_username;
  private $_options;
  private $_client;
  private $_ready;
  private $_handle;

  public function __construct( $username, array $options, ImpalaServiceIf $client ) {
    $this->_username = (string) $username;
    $this->_options = $options;
    $this->_client = $client;
  }

  public function exec( $queryStr ) {
    $queryCleaner = new QueryCleaner();

    $this->_ready = false;
    $this->_handle = $this->_client->query( new Query( array(
      'query' => $queryCleaner->clean( $queryStr ),
      'hadoop_user' => $this->_username,
      'configuration' => $this->_options,
    ) ) );

    return $this;
  }

  public function wait() {
    if ( $this->_ready ) {
      return $this;
    }

    // Wait for query to be ready
    $sleeper = new Sleeper();
    $sleeper->reset();
    do {
      if ( $sleeper->sleep()->getSleptSecs() > 18000 ) { // 5 Hours
        try {
          // Fire and forget cancel operation, ignore the returned:
          // \ThriftGenerated\TStatus
          $this->_client->Cancel( $this->_handle );
        }  finally {
          throw new Exception( 'Impala Query Killed!' );
        }
      }

      $state = $this
        ->_client
        ->get_state( $this->_handle );

      if ( $this->_isOperationFinished( $state ) ) {
        break;
      }

      if ( $this->_isOperationRunning( $state ) ) {
        continue;
      }

      // Query in error state
      throw new Exception(
        'Query is in an error state: ' . QueryState::$__names[ $state ]
      );

    } while (true);

    $this->_ready = true;
    return $this;
  }

  public function fetch( $maxRows ) {
    if ( !$this->_ready ) {
      throw new Exception( "Query is not ready. Call `->wait()` before `->fetch()`" );
    }
    try {
      $sleeper = new Sleeper();
      $sleeper->reset();

      do {
        $response = $this->_client->fetch( $this->_handle, false, $maxRows );
        if ( $response->ready ) {
          break;
        }

        if ( $sleeper->sleep()->getSleptSecs() > 60 ) { // 1 Minute
          throw new Exception( 'Impala Query took too long to fetch!' );
        }

      } while ( true );

      return $this->_parseResponse( $response );
    } catch( Exception $e ) {
      throw new Exception( $e->getMessage(), $e->getCode(), $e );
    }
  }

  public function close() {
    try {
      // Fire close operation and ignore exceptions
      $this->_client->close( $this->_handle );
    } finally {
      return $this;
    }
  }

  private function _parseResponse( $response ) {
    $result = array();
    foreach ( $response->data as $row => $rawValues ) {
      $values = explode( "\t", $rawValues, count( $response->columns ) );

      foreach ( $response->columns as $col => $dataType ) {
        switch ($dataType) {
          case 'int':
          case 'bigint':
          case 'smallint':
          case 'tinyint':
            $result[ $row ][ $col ] = intval( $values[ $col ] );
            break;

          case 'decimal':
          case 'double':
          case 'float':
          case 'real':
            $result[ $row ][ $col ] = floatval( $values[ $col ] );
            break;

          case 'boolean':
            $result[ $row ][ $col ] = ( 'true' === $values[ $col ] );
            break;

          case 'char':
          case 'string':
          case 'varchar':
          case 'timestamp':
          default:
            $result[ $row ][ $col ] = $values[ $col ];
            break;
        }
      }
    }
    return $result;
  }

  private function _isOperationFinished( $state ) {
    return ( QueryState::FINISHED == $state );
  }

  private function _isOperationRunning( $state ) {
    return in_array(
      $state,
      array(
        QueryState::CREATED,     // 0
        QueryState::INITIALIZED, // 1
        QueryState::COMPILED,    // 2
        QueryState::RUNNING,     // 3
      )
    );
  }
}
