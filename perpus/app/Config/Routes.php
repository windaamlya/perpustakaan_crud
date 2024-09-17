<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/buku', 'Buku::index');
$routes->get('/buku/create', 'Buku::create');
$routes->post('/buku/simpanan', 'Buku::simpanan');
$routes->get('/buku/update/(:num)', 'buku::update/$1');
$routes->get('/buku/edit/(:num)', 'buku::edit/$1');
$routes->get('/buku/hapus/(:num)', 'buku::hapus/$1');

$routes->get('/user','user::index');
$routes->get('/user/create','user::create');
$routes->post('/user/tambah','user::tambah');
$routes->get('/user/update/(:num)','user::update/$1');
$routes->post('/user/edit/(:num)','user::edit/$1');
$routes->get('/user/hapus/(:num)','user::hapus/$1');

$routes->get('/peminjaman','peminjaman::index');
$routes->get('/peminjaman/create','peminjaman::create');
$routes->post('/peminjaman/tambah','peminjaman::tambah');
$routes->get('/peminjaman/update/(:num)','peminjaman::update/$1');
$routes->post('/peminjaman/edit/(:num)','peminjaman::edit/$1');
$routes->get('/peminjaman/hapus/(:num)','peminjaman::hapus/$1');

$routes->get('/pengembalian','pengembalian::index');
$routes->get('/pengembalian/create','pengembalian::create');
$routes->post('/pengembalian/tambah','pengembalian::tambah');
$routes->get('/pengembalian/update/(:num)','pengembalian::update/$1');
$routes->post('/pengembalian/edit/(:num)','pengembalian::edit/$1');
$routes->get('/pengembalian/hapus/(:num)','pengembalian::hapus/$1');