<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 1:52
 */
Interface DBAdapter
{
    public function connect($v);
    public function query($v);
    public function fetch();
    public function close();
}