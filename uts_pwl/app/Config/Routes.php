<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/user/list', 'AuthController::listUser', ['filter' => 'auth']);

$routes->get('/admin', 'DashboardController::admin', ['filter' => 'role:admin']);
$routes->get('/user', 'DashboardController::user', ['filter' => 'role:user']);

$routes->get('/barang', 'BarangController::index', ['filter' => 'auth']);
$routes->post('/barang/tambah', 'BarangController::tambah', ['filter' => 'auth']);
$routes->post('/barang/updateJumlah/(:num)', 'BarangController::updateJumlah/$1', ['filter' => 'auth']);
$routes->get('/barang/hapus/(:num)', 'BarangController::hapus/$1', ['filter' => 'auth']);