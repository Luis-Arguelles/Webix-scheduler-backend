<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('test', function () {
    return 'Test route is working!';
});

$routes->resource('events', ['controller' => 'EventController']);
