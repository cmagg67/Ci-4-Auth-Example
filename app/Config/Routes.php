<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::attemptLogin');
$routes->get('logout', 'Login::logout');

$routes->get('home', 'Dashboard::index');

$routes->get('register', 'Register::index');
$routes->post('register', 'Register::create');