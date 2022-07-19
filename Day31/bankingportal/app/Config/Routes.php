<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');
$routes->get('/dashboard', 'Home::dashboard');
$routes->post('/dashboard', 'Home::dashboard');
$routes->get('/logout', 'Home::logout');
$routes->get('/user-logout', 'Home::user_logout');
$routes->get('/add-customer', 'Home::add_customer');
$routes->post('/add-customer', 'Home::add_customer_action');
$routes->get('/view-customer', 'Home::view_customer');
$routes->post('/view-customer', 'Home::view_customer');
$routes->get('/view-loan', 'Home::view_loan');
$routes->post('/view-loan', 'Home::view_loan');
$routes->get('/user-login', 'Home::user_login');
$routes->post('/user-login-actions', 'Home::user_login_actions');
$routes->get('/user-dashboard', 'Home::user_dashboard');
$routes->post('/user-dashboard', 'Home::user_dashboard');
$routes->get('/user-loan', 'Home::user_loan');
$routes->post('/handle-loan', 'Home::handle_loan');
$routes->get('/user-loan-history', 'Home::user_loan_history');
$routes->get('/email', 'EmailController::index');
$routes->post('/email', 'EmailController::mail_ji');
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
