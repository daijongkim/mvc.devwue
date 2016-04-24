<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-24
 * Time: 오전 11:13
 */
interface CacheAdapter
{
    public function connect($v);
    public function get($v);
    public function set($k,$v,$ttl);
    public function delete($v);
    public function stats();
    public function close();
    public function flush();
}