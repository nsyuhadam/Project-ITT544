<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['post/create'] = 'post/create';
//$route['post/(:any)']='post/view/$1';
$route['post'] = 'post/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
