<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 2:25
 */
class UserDao extends Dao
{
    protected $columns;
    protected function getUser() {
        return self::$db->query('select * from user where id=?', $this->id);
    }

    protected function __get($varName) {
        if( isset($this->columns[$varName]) )
            return $this->columns[$varName];
    }
}