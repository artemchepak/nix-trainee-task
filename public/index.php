<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\Router;
use app\controllers\MainController;

$router = new Router();

$router->get('/', [MainController::class, 'index']);
$router->get('/login', [MainController::class, 'login']);
$router->post('/login', [MainController::class, 'login']);
$router->get('/registration', [MainController::class, 'registration']);
$router->post('/registration', [MainController::class, 'registration']);
$router->get('/profile', [MainController::class, 'profile']);

$router->resolve();