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
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');
$routes->group('admin', function($routes){
	$routes->get('news', 'NewsAdmin::index');
	$routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->add('news/new', 'NewsAdmin::create');
	$routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
	$routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
	$routes->get('login', 'Login::index');
});
$routes->get('/manufacture', 'Manufacture::index');
$routes->get('/digital', 'Digital::index');
$routes->get('/system', 'System::index');
$routes->get('/digital', 'Digital::index');
$routes->get('/inti_aio', 'Inti_Aio::index');
$routes->get('/intibook', 'Intibook::index');
$routes->get('/inti_chrome', 'Inti_Chrome::index');
$routes->get('/pju_pinter', 'PJU::index');
$routes->get('/repair', 'Repair::index');
$routes->get('/solar_system', 'Solar::index');
$routes->get('/voting', 'Voting::index');

$routes->get('berkas/create', 'Berkas::create');
$routes->get('berkas', 'Berkas::index');
$routes->post('/berkas/save', 'Berkas::save');
$routes->get('/berkas/download', 'Berkas::download');

// $routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('logout', 'Login::logout');
// $routes->get('/logout', 'Login::logout');

$routes->get('/kumpulan', 'Berkas::kumpulan');
$routes->get('berkas/download/(:num)', 'Berkas::download/$1');

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