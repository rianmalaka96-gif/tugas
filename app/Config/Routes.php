<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



// Route untuk Anggota
$routes->get('/anggota', 'AnggotaController::index');
$routes->get('/anggota/tambah', 'AnggotaController::tambah');
$routes->post('/anggota/simpan', 'AnggotaController::simpan');
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/anggota/update/(:num)', 'AnggotaController::update/$1');
$routes->post('/anggota/hapus/(:num)', 'AnggotaController::hapus/$1');// Route untuk Anggota

// Route untuk Handphone
$routes->get('/handphone', 'HandphoneController::index');
$routes->get('/handphone/tambah', 'HandphoneController::tambah');
$routes->post('/handphone/simpan', 'HandphoneController::simpan');
$routes->get('/handphone/edit/(:num)', 'HandphoneController::edit/$1');
$routes->post('/handphone/update/(:num)', 'HandphoneController::update/$1');
$routes->delete('/handphone/hapus/(:num)', 'HandphoneController::hapus/$1');
