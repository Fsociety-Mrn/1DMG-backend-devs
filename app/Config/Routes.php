<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/api', 'API::index');
$routes->get('/api/posts/create', 'API::create_post');
$routes->get('/api/posts/read', 'API::read_posts');
$routes->get('/api/posts/update', 'API::update_posts');
$routes->get('/api/posts/delete', 'API::delete_post');
