<?php

namespace EbayStore;


use \Exception;
use \PDO;
use \PDOException;


/**
 * Mysql class
 *
 * @package EbayStore
 */
class Mysql
{
    /**
     * @var PDO
     */
    protected static $db;

    /**
     * Static method to get Mysql object
     *
     * @return Mysql
     */
    public static function getInstance()
    {
        static $instance = null;

        if (null === $instance) {
            $instance = new Mysql();
        }

        return $instance;
    }

    /**
     * Constructor
     *
     * @throws Exception
     */
    protected function __construct()
    {
        if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) {
            throw new Exception('PHP PDO extension not installed.');
        }

        try {
            self::$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        } catch (PDOException $e) {
            throw new Exception('DB connection failed.', null, $e);
        }
    }

    /**
     * Clone method is forbidden
     */
    private function __clone()
    {

    }

    /**
     * Wakeup also forbidden
     */
    private function __wakeup()
    {

    }

    /**
     * Send query request to DB
     *
     * @param $sql
     *
     * @throws Exception
     * @return \PDOStatement
     */
    public function query($sql)
    {
        try {
            return self::$db->query($sql);
        } catch (PDOException $e) {
            throw new Exception('DB query failed.', null, $e);
        }
    }

    /**
     * Exec DML query
     *
     * @param $sql
     *
     * @throws Exception
     * @return int
     */
    public function exec($sql)
    {
        try {
            return self::$db->exec($sql);
        } catch (PDOException $e) {
            throw new Exception('DB query failed.', null, $e);
        }
    }
}
