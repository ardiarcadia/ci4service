<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false);

$routes->get('/', 'PublicController::index');
$routes->get('/genKey', 'PublicController::generateKey');

$routes->group('api', ['filter' => 'apikey'], static function ($routes) {
    $routes->get('auth', 'PublicController::authTesting');
});
