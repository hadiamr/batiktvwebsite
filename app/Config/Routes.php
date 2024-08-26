<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('logout', 'Login::logout');

/** Artikel */
$routes->get('/news', 'News::index');
$routes->add('/news/(:any)', 'Artikel::view/$1');
$routes->add('/artikel/view/(:any)', 'Artikel::view/$1');
$routes->get('/sitemap.xml', 'Sitemap::index');

$routes->group('/', ['filter' => 'noauth'], function ($routes) {
    $routes->post('login', 'Login::auth');
    $routes->get('login', 'Login::index');
    $routes->get('forgot', 'Login::forgot');
});

$routes->group('/', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');

    $routes->add('profil/(:segment)', 'Profil::$1');
    $routes->add('profil/(:segment)/(:any)', 'Profil::$1/$2');

    $routes->add('artikel/(:segment)', 'Artikel::$1', ['filter' => 'wartawan']);
    $routes->add('artikel/(:segment)/(:any)', 'Artikel::$1/$2', ['filter' => 'wartawan']);

    /** Jadwal Produksi */
    $routes->add('produksi/(:segment)', 'Produksi::$1', ['filter' => 'admin']);
    $routes->add('produksi/(:segment)/(:num)', 'Produksi::$1/$2', ['filter' => 'admin']);

    /** Program Tayang */
    $routes->add('tayang/(:segment)', 'Tayang::$1', ['filter' => 'admin']);
    $routes->add('tayang/(:segment)/(:num)', 'Tayang::$1/$2', ['filter' => 'admin']);

    /** Jadwal Tayangan */
    $routes->add('tayangan/(:segment)', 'Tayangan::$1', ['filter' => 'admin']);
    $routes->add('tayangan/(:segment)/(:num)', 'Tayangan::$1/$2', ['filter' => 'admin']);

    /** Jadwal Laporan */
    $routes->add('laporan/(:segment)', 'Laporan::$1', ['filter' => 'admin']);
    $routes->add('laporan/(:segment)/(:any)', 'Laporan::$1/$2', ['filter' => 'admin']);

    /** Data Karyawan */
    $routes->add('karyawan/(:segment)', 'Karyawan::$1', ['filter' => 'admin']);
    $routes->add('karyawan/(:segment)/(:segment)', 'Karyawan::$1/$2', ['filter' => 'admin']);

    /** Data Program */
    $routes->add('program/(:segment)', 'Program::$1', ['filter' => 'admin']);
    $routes->add('program/(:segment)/(:num)', 'Program::$1/$2', ['filter' => 'admin']);

    /** Data Tim */
    $routes->add('tim/(:segment)', 'Tim::$1', ['filter' => 'admin']);
    $routes->add('tim/(:segment)/(:num)', 'Tim::$1/$2', ['filter' => 'admin']);

    /** Data Jabatan */
    $routes->add('jabatan/(:segment)', 'Jabatan::$1', ['filter' => 'admin']);
    $routes->add('jabatan/(:segment)/(:num)', 'Jabatan::$1/$2', ['filter' => 'admin']);

    /** Data Mitra */
    $routes->add('mitra/(:segment)', 'Mitra::$1', ['filter' => 'admin']);
    $routes->add('mitra/(:segment)/(:num)', 'Mitra::$1/$2', ['filter' => 'admin']);

    /** Data Pengguna */
    $routes->add('pengguna/(:segment)', 'Pengguna::$1', ['filter' => 'superadmin']);
    $routes->add('pengguna/(:segment)/(:segment)', 'Pengguna::$1/$2', ['filter' => 'superadmin']);

    /** Data Setelan */
    $routes->add('setelan/(:segment)', 'Setelan::$1', ['filter' => 'admin']);
    $routes->add('setelan/(:segment)/(:num)', 'Setelan::$1/$2', ['filter' => 'admin']);
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
