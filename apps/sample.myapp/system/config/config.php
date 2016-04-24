<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 12:15
 */
error_reporting(E_ALL);
ini_set('display_errors','On');

$view_ext = '.html';
$config['include_path'] = array(
    
);
$config['database'] = array(
     'master'   => ''
    ,'slave'    => ''
    ,'user'     => ''
    ,'password' => ''
    ,'charset'  => ''
    ,'port'     => ''
);
$config['cache'] = array(
     'host'     => array('host1', 'host2')
    ,'user'     => ''
    ,'password' => ''
    ,'port'     => ''
);