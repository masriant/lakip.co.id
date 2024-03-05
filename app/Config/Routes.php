<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('home/register', 'Home::register');
// $routes->get('home/user', 'Home::user');
$routes->get('/', 'User::index');
$routes->get('/user', 'User::index');

$routes->get('/admin', 'Admin::index',  ['filter' => 'role:admin']); 
$routes->get('/admin/index', 'Admin::index',  ['filter' => 'role:admin']); 
$routes->get('/admin/(:num)', 'Admin::detail/$1',  ['filter' => 'role:admin']); 
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1',  ['filter' => 'role:admin']); 

$routes->get('/admin/activation', 'Admin::activation',  ['filter' => 'role:admin']); 
$routes->get('/admin/activate/(:num)', 'Admin::activate/$1',  ['filter' => 'role:admin']); 