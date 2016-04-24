<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-24
 * Time: 오전 10:46
 */
class CommonDao extends Dao
{
    public function __construct() {
        parent::__construct(MysqliAdapter::getInstance(), (object) array('master' => '', 'user' => '', 'password' => '', 'slave' => '', 'charset' => '', 'port' => ''));
    }
}