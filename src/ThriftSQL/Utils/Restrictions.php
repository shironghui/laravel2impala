<?php

namespace Semir\Laravel2impala\ThriftSQL\Utils;

/**
 * Util to restrict execution statement
 */
class Restrictions {

    /**
     * Verify that the SQL statement you entered contains keywords that are not allowed
     *
     * @param $queryStr
     * @return bool
     */
    static final function Minefield($queryStr) {
        if (FALSE === stripos($queryStr, 'UPDATE ') && FALSE === stripos($queryStr, 'DELETE ') && FALSE === stripos($queryStr, 'INSERT ') && FALSE === stripos($queryStr, 'DROP ') && FALSE === stripos($queryStr, 'ALTER TABLE') && FALSE === stripos($queryStr, 'TRUNCATE')) {
            return TRUE;
        }

        return FALSE;
    }
}