<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-23
 * Time: 오후 12:24
 */
define('DS', DIRECTORY_SEPARATOR);
require_once APP_ROOT.DS.'config'.DS.'config.php';
define('APP_VIEW_EXT', $view_ext);
$oRouter = new Router();
$oRouter->dispatch()->execute();