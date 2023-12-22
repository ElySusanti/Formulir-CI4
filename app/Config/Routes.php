<?php

use CodeIgniter\Router\RouteCollection;

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Formulir');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Formulir::satu');
$routes->resource('/api/formulir', ['controller' => 'Api\DataBiodata']);
$routes->get('/', 'Formulir::index');
$routes->post('/', 'Formulir::simpan');
$routes->get('/Formulir/detail1/(:num)', 'Formulir::detail1/$1');
