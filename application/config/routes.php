<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['control'] = 'dashboard';
$route['control/logout'] = 'dashboard/logout';
$route['migrate/(:num)'] = 'migrate/index/$';
$route['control/categoria_eventos/(:num)'] = 'control/categoria_eventos/index/$';
$route['control/usuarios/(:num)'] = 'control/usuarios/index/$';
$route['control/notas/(:num)'] = 'control/notas/index/$';
$route['control/categoria_notas/(:num)'] = 'control/categoria_notas/index/$';
$route['control/categoria_notas/destroy/(:num)'] = 'control/categoria_notas/destroy/$';
$route['control/lugares/(:num)'] = 'control/lugares/index/$';
$route['control/beneficios/(:num)'] = 'control/beneficios/index/$';
$route['control/roles/(:num)'] = 'control/roles/index/$';
$route['control/admins/(:num)'] = 'control/admins/index/$';
$route['control/permisos/(:num)'] = 'control/permisos/detail/$';
$route['control/citas/(:num)'] = 'control/citas/index/$';
$route['control/registros/(:num)'] = 'control/registros/index/$';
$route['control/eventos/(:num)'] = 'control/eventos/index/$';
$route['control/categoria_eventos/(:num)'] = 'control/categoria_eventos/index/$';
/* append */
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




// CREATE TABLE IF NOT EXISTS `ci_sessions` (
//     `id` varchar(40) NOT NULL,
//     `ip_address` varchar(45) NOT NULL,
//     `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
//     `data` blob NOT NULL,
//     KEY `ci_sessions_timestamp` (`timestamp`)
// );

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
