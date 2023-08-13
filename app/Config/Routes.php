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
// $routes->setAutoRoute("false");

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('/test', 'Home::test');
// AUTH

$routes->get('/registration', 'Auth::register');
$routes->post('/registration', 'Auth::register');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/check', 'Auth::check');
$routes->get('/logout', 'Auth::logout');

// AUTH END
$routes->get('/', 'ProductController::index');
$routes->get('/cart', 'ProductController::cart');
$routes->get('/details/(:any)', 'ProductController::details/$1');


$routes->get('/subcategory/(:any)', 'SubcategoryController::details/$1');
$routes->get('/category/(:any)', 'CategoryController::details/$1');


$routes->get('/cartapi/(:any)', 'CartController::details/$1');
$routes->get('/cartapi', 'CartController::index');
// $routes->get('/checkout', 'CartController::checkout');
$routes->post('/checkout', 'CartController::checkout');

$routes->get('/test', 'CartController::test');


$routes->get('/profile', 'ProfileController::index');

// $routes->get('/cart', 'CheckoutController::index');
// $routes->get('/checkout/create', 'CheckoutController::create');
// $routes->post('/checkout/create', 'CheckoutController::create');





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
