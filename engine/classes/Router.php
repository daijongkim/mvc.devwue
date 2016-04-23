<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 12:35
 */
class Router
{
    protected $controller;
    protected $action;
    protected $uriData;

    private static function initialize() {
        //todo parse URI string
        define('APP_CTRL_DIR','');
    }

    /**
     * @return mixed
     */
    public function dispatch() {
        self::initialize();
        return new $this->controller($this->action);
    }

}