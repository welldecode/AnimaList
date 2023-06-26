<?php

use core\Router\Router;
use core\Router\Dispatcher;

require './vendor/autoload.php';

session_start();
ini_set('display_errors', 1);

$router = new Router;
require('./config/routes.php');

$dispatcher = new Dispatcher($router);
$dispatcher->dispatch(function (array $params, array|Closure $action) use ($dispatcher) {

    $controllerFileName = ucfirst($action[0]) . 'Controller';
    $controlerClass = '\\app\\controllers\\site\\' . $controllerFileName;
 
    $controller = new $controlerClass($action[1], $params);
    $controller->init($action[1], $params);
});
