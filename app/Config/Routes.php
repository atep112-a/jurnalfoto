<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminController::index');
$routes->get('/produk', 'AdminController::produk');
$routes->get('/team', 'AdminController::team');
$routes->get('/order', 'AdminController::order');


$routes->get('/billing', 'PagesController::billing');
$routes->get('/customer', 'PagesController::customer');
$routes->get('/photograph', 'PagesController::photo');


$routes->get('/produk1', 'AdminController::produk1');

// $routes->match(['get', 'post'], 'pelangan/next', 'Pelangan::next');
// $routes->get('/Pelangan', 'Pelangan::choise');
// $routes->get('/dashboard', 'Dashboard::index');
