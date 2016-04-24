<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 1:44
 */
class Login extends SampleServices
{
    protected $user;
    public function __construct() {
        $this->user = UserDao::getInstance();
    }
    
    public function login() {
        
    }

}