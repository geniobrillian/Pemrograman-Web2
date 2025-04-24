<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'profil::index');
$routes->get('matakuliah/visdat', 'matakuliah::visdat');
$routes->get('matakuliah/pemweb2', 'matakuliah::pemweb2');
$routes->get('matakuliah/metodologi', 'matakuliah::metodologi');
$routes->get('matakuliah/basisdata', 'matakuliah::basisdata');
