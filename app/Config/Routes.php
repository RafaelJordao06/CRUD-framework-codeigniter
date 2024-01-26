<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes = Services::routes();

/**
 * --------------------------------------------------------------------
 * Auto-routing
 * --------------------------------------------------------------------
 * 
 * 'Auto-routing' is a convenient way to automatically match URIs to
 * their controllers. This gives you a quick start with the framework and
 * removes the need to manually specify every route in your application.
 * 
 * Note that 'auto-routing' is significantly slower than defining
 * your routes manually, so it should not be used in production environments.
 * 
 * If you need to add specific routes, you can do so below. The '$routes'
 * variable holds an instance of 'RouteCollection'.
 */
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since the router doesn't have to scan directories.
$routes->get('/', 'Home::index');

// Additional routes can be added below as needed

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 * 
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 * 
 * You will have this placeholder for environment-based routes at the bottom
 * of your 'Routes.php' file. This allows you to include additional routes
 * files based on the current environment setting.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
