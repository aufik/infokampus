 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $route['admin/post/(:any)'] = 'admin/post/$1';
// $route['post/(:any)'] = 'post/view/$1';
$route['default_controller'] = 'Home';
$route['lomba/(:any)'] = 'lomba/detail_lomba/$1';
$route['beasiswa/(:any)'] = 'beasiswa/detail_beasiswa/$1';
$route['events/(:any)'] = 'events/detail_events/$1';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = FALSE;
