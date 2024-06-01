<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/api', 'APIController::index');
    
// POST
$routes->post('/posts',  'APIController::create', ['filter' => 'authFilter']);
    
// GET
$routes->get('/posts/(:num)?', 'APIController::read/$1', ['filter' => 'authFilter']);
$routes->get('/posts', 'APIController::read/', ['filter' => 'authFilter']);
    
// UPDATE
$routes->put('/posts/(:num)?', 'APIController::update/$1', ['filter' => 'authFilter']);
    
// DELETE
$routes->delete('/posts/(:num)?', 'APIController::delete/$1', ['filter' => 'authFilter']);


