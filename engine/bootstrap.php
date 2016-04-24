<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 12:24
 */
define('DS', DIRECTORY_SEPARATOR);
defined(__DIR__) OR define('__DIR__', dirname(__FILE__));
define('ENGINE_ROOT', dirname(__DIR__));
require_once ENGINE_ROOT.DS.'engine'.DS.'Loader.php';
$app_config = APP_ROOT.DS.'system'.DS.'config'.DS.'config.php';
if( file_exists($app_config) )
{
    require_once $app_config;
    define('APP_VIEW_EXT', $view_ext);
}
$oLoader = new Loader($config['include_path']);
$oRouter = new Router();
$oRouter->dispatch()->execute();