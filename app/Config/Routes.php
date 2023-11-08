<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/users', 'Datapengguna::index');
$routes->post('/users', 'Datapengguna::create');