<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-24
 * Time: 오전 11:14
 */
interface QueueAdapter
{
    public function connect($config);
    public function pop($k);
    public function push($k,$v);
    public function stats();
    public function flush();
    public function close();
}