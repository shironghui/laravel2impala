<?php
/**
 * Impala driver of thrift
 * @author Tris<shironghui@ecsemir.com>
 * Date: 2020-06-06
 */
namespace Semir\Laravel2impala;

use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Impala {
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * @var \Semir\Laravel2impala\ThriftSQL\Impala
     */
    private static $connectHandle;
    /**
     * constructor.
     */
    public function __construct()
    {
    }

    /**
     * 查询SQL
     * @param $sql
     * @return array|false
     */
    public function query($sql) {
        if (empty($sql)) {
            return FALSE;
        }

        try {
            $response = $this->getConnection()->connect()->queryAndFetchAll($sql);
        } catch (\Exception $exception) {
            $response = NULL;
        }

        return $response;
    }

    /**
     * @return ImpalaConnection|ThriftSQL|ThriftSQL\Impala
     */
    protected function getConnection() {
        if (!isset(self::$connectHandle) || empty(self::$connectHandle)) {
            self::$connectHandle = new ThriftSQL\Impala();
        }

        return self::$connectHandle;
    }

    /**
     * 构建SQL
     * @param array $whereArray
     * @param string $field
     * @param null   $page
     * @param null   $pageSize
     * @param null   $orderByField
     * @return string
     */
    private function buildWhereSql($whereArray, $field = '*', $page = NULL, $pageSize = NULL, $orderByField = NULL) {
        $conditions = (is_array($whereArray) && $whereArray) ? implode(' AND ', $whereArray) : '1 = 1';
        $sql = 'SELECT ' . $field . ' FROM ' . $this->table . ' WHERE ' . $conditions;
        if ($orderByField) {
            $sql .= ' ORDER BY ' . $orderByField;
        }
        if ($page && $pageSize) {
            $sql .= ' LIMIT ' . $pageSize . ' OFFSET ' . ($page - 1) * $pageSize;
        }

        return $sql;
    }

    protected function disconnect() {
        if (!empty(self::$connectHandle)) {
            self::$connectHandle->disconnect();
        }
    }

    public function __destruct() {
        $this->disconnect();
    }
}