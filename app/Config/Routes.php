<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/api', 'APIController::index');

// POST
$routes->post('/posts', 'APIController::create');

// GET
$routes->get('/posts/(:num)?', 'APIController::read/$1');
$routes->get('/posts', 'APIController::read/');

// UPDATE
$routes->put('/posts/(:num)?', 'APIController::update/$1');

// DELETE
$routes->delete('/posts/(:num)?', 'APIController::delete/$1');