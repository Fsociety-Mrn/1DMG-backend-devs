<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/api', 'API_Endpoints::index');
$routes->get('/api/posts/create', 'API_Endpoints::create_post');
$routes->get('/api/posts/read', 'API_Endpoints::read_posts');
$routes->get('/api/posts/update', 'API_Endpoints::update_posts');
$routes->get('/api/posts/delete', 'API_Endpoints::delete_post');
