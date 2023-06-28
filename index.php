<?php

use core\Router\Router;
use core\Router\Dispatcher;

require './vendor/autoload.php'; 
session_start();
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
error_reporting(0);
session_start();
error_reporting(E_ALL);
ini_set('display_errors',0);
 
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 1));
$dotenv->load();
 
$router = new Router;
require('./config/routes.php');

$dispatcher = new Dispatcher($router);
$dispatcher->dispatch(function (array $params, array|Closure $action) use ($dispatcher) {
 
    $controlerClass = '\\app\\controllers\\site\\' . ucfirst($action[0]) . 'Controller';
 
    $controller = new $controlerClass($action[1], $params);
 
    $controller->init($action[1], $params);
});
