<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/clientes','ClienteController::listado');
$routes->post('clientes/delete/(:num)','CllienteController::delete/$1');

