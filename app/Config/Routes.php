<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/verifyLogin', 'LoginController::login',['filter' => 'corsFilter']);
$routes->options('/verifyLogin', 'LoginController::login', ['filter' => 'corsFilter']);