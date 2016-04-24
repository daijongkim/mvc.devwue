<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-24
 * Time: 오전 11:15
 */
interface StreamAdapter
{
    public function connect($config);
    public function read($k);
    public function write($k,$v);
    public function close();
}