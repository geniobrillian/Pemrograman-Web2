<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/books', 'Books::index');

$routes->get('/books/(:segment)', 'Books::detail/$1');

