<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('login', 'Login::index');

$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');
 // Load login page
 

$routes->get('dashboard', 'Dashboard::index');
$routes->post('dashboard', 'Dashboard::index');

$routes->get('dta', 'Dta::index');

$routes->get('add', 'Dta::create');

$routes->post('employee-store', 'Dta::store');

$routes->get('edit/(:num)', 'Dta::edit/$1');

$routes->post('update/(:num)', 'Dta::update/$1');

$routes->get('delete/(:num)', 'Dta::delete/$1');

