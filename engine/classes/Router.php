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

    public function __construct() {
        $this->initialize();
    }

    private function initialize() {
        //todo parse URI string
        $this->controller = 'Index'.'Controller';
        $this->action     = 'index';
        define('APP_ACTION', $this->action);
        define('APP_CTRL_DIR','');
    }

    /**
     * @return mixed
     */
    public function dispatch() {
        return new $this->controller($this->action);
    }

}