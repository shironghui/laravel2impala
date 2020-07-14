<?php
namespace Semir\Laravel2impala;

use Semir\Laravel2impala\ThriftSQL\Utils\Iterator;

abstract class ThriftSQL {

  const VERSION = '0.3.1';
  const USERNAME_DEFAULT = 'tris-php-impala';

  /**
  * @return self
  * @throws Semir\Laravel2impala\ThriftSQL\Exception
  */
  abstract public function connect();

  /**
  * Sends a query string for execution on the server and returns a
  * \ThriftSQL\Query object for fetching the results manually.
  *
  * @param string $queryStr
  * @return Semir\Laravel2impala\ThriftSQL\Query
  * @throws Semir\Laravel2impala\ThriftSQL\Exception
  */
  abstract public function query( $queryStr );

  /**
  * @return null
  */
  abstract public function disconnect();

  /**
  * The simplest use case; takes a query string executes it synchronously and
  * returns the entire result set after collecting it from the server.
  *
  * @param string $queryStr
  * @return array
  * @throws Semir\Laravel2impala\ThriftSQL\Exception
  */
  public function queryAndFetchAll( $queryStr ) {
    $iterator = $this->getIterator( $queryStr );

    $resultTuples = [];
    foreach( $iterator as $rowNum => $row ) {
      $resultTuples[] = $row;
    }

    return $resultTuples;
  }

    /**
     * Gets a memory efficient iterator that you can use in a foreach loop.
     *
     * @param $queryStr
     * @return Iterator
     */
  public function getIterator( $queryStr ) {
    return new Iterator( $this, $queryStr );
  }
}
