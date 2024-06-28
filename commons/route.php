<?php

use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', [ProductController::class, 'index']);

$router->get('/list-product', [ProductController::class, 'index']);
$router->get('/show-product/{id}', [ProductController::class, 'show']);
$router->get('/add-product', [ProductController::class, 'add']);
$router->post('/add-product', [ProductController::class, 'store']);
$router->get('/edit-product/{id}', [ProductController::class, 'edit']);
$router->post('/update-product', [ProductController::class, 'update']);
$router->get('/delete-product/{id}', [ProductController::class, 'delete']);

$router->get('/list-category', [CategoryController::class, 'index']);
$router->get('/show-category/{id}', [CategoryController::class, 'show']);
$router->get('/add-category', [CategoryController::class, 'add']);
$router->post('/add-category', [CategoryController::class, 'store']);
$router->get('/edit-category/{id}', [CategoryController::class, 'edit']);
$router->post('/update-category', [CategoryController::class, 'update']);
$router->get('/delete-category/{id}', [CategoryController::class, 'delete']);
// print_r($router);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
