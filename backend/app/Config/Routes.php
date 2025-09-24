<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');       // Landing page
$routes->get('/landing', 'Users::index');
$routes->get('/about', 'Users::about');
$routes->get('/contact', 'Users::contact');
$routes->get('/about', 'About::index');
