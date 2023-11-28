<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/formulir/satu', 'Formulir::satu');
$routes->get('/formulir/dua', 'Formulir::dua');
$routes->get('/formulir/tiga', 'Formulir::tiga');
$routes->get('/formulir/empat', 'Formulir::empat');
$routes->get('/formulir/lima', 'Formulir::lima');
$routes->get('/formulir/enam', 'Formulir::enam');
