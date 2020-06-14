<?php

namespace Semir\Laravel2impala\ThriftSQL;

use Semir\Laravel2impala\Thrift\Protocol\TBinaryProtocol;
use Semir\Laravel2impala\Thrift\Transport\TSocket;
use Semir\Laravel2impala\ThriftGenerated\ImpalaServiceClient;
use Semir\Laravel2impala\ThriftSQL;

class Impala extends ThriftSQL {

  private $_host;
  private $_port;
  private $_username;
  private $_password;
  private $_timeout;
  private $_options;
  private $_transport;
  private $_client;

  public function __construct( $host = NULL, $port = 21000, $username = NULL, $password = NULL, $timeout = NULL ) {
    $this->_host = $host ?? env('IMPALA_HOST');
    $this->_port = $port;
    $this->_username = $username;
    $this->_password = $password; // not used -- we impersonate on the query level
    $this->_timeout = $timeout;
    $this->_options = array();
  }

  public function setOption( $key, $value ) {
    // Normalize key
    $key = strtoupper( $key );

    if ( null === $value ) {
      // NULL means unset
      unset( $this->_options[ $key ] );
    } elseif ( true === $value ) {
      $this->_options[ $key ] = 'true';
    } elseif ( false === $value ) {
      $this->_options[ $key ] = 'false';
    } else {
      $this->_options[ $key ] = (string) $value;
    }

    return $this;
  }

  public function connect() {
    // Check if we have already connected
    if ( null !== $this->_client ) {
      return $this;
    }

    // Make sure we have a username set
    if ( empty( $this->_username ) ) {
      $this->_username = self::USERNAME_DEFAULT;
    }

    try {
      //$this->_transport = new \Thrift\Transport\TSocket( $this->_host, $this->_port );
      $this->_transport = new TSocket($this->_host, $this->_port);

      if ( null !== $this->_timeout ) {
        $this->_transport->setSendTimeout( $this->_timeout * 1000 );
        $this->_transport->setRecvTimeout( $this->_timeout * 1000 );
      }

      $this->_transport->open();

      //$this->_client = new \ThriftGenerated\ImpalaServiceClient(
      //  new \Thrift\Protocol\TBinaryProtocol(
      //    $this->_transport
      //  )
      //);
        $this->_client = new ImpalaServiceClient(
            new TBinaryProtocol(
                $this->_transport
            )
        );
    } catch( Exception $e ) {
      $this->_client = null;
      throw new Exception( $e->getMessage(), $e->getCode(), $e );
    }

    return $this;
  }

  public function query( $queryStr ) {
    try {
      $options = array();
      foreach ( $this->_options as $key => $value ) {
        $options[] = "{$key}={$value}";
      }
      $query = new ImpalaQuery( $this->_username, $options, $this->_client );
      return $query->exec( $queryStr );
    } catch ( Exception $e ) {
      throw new Exception( $e->getMessage(), $e->getCode(), $e );
    }
  }

  public function disconnect() {
    // Clear out the client
    $this->_client = null;

    // Close the socket
    if ( null !== $this->_transport ) {
      $this->_transport->close();
    }
    $this->_transport = null;
  }
}
