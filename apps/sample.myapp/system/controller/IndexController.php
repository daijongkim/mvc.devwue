<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-24
 * Time: 오전 11:25
 */
class IndexController extends Controller
{
    protected function index() {
        return array('title' => 'welcome', 'body' => 'hello world');
    }
}