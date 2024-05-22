<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/api', 'APIController::index');

// POST
$routes->post('/posts/create', 'APIController::create');

// GET
$routes->get('/posts/read/(:num)?', 'APIController::read/$1');
$routes->get('/posts/read/', 'APIController::read/');