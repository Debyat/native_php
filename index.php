<?php

require "include.php";

use Controllers\AdminController;
use Controllers\AuthController;
use Middleware\Auth;
use Route\Router;

$route = new Router();

$route->route('/', function () {
    AuthController::index();
});

$route->route('/login', function () {
    AuthController::login();
});

$route->route('/admin-form', function () {
    AdminController::form(); 
});

$route->route('/add-admin', function () {
    AdminController::add();
});

$route->run();