<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 2:21
 */
class Dao extends Singleton
{
    protected static $db;
    public function __construct(DBAdapter $adapter, Dto $config) {
        self::$db = $adapter;
        self::$db->connect($config);
    }
}