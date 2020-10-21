<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['moderator'] = 'moderator/index';
$route['klubovi/klub'] = 'klubovi/klub';
$route['klubovi'] = 'klubovi/index';
$route['admin/update'] = 'admin/update';
$route['admin'] = 'admin/view';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/comment'] = 'posts/comment';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
$route['user='] = 'user/(:any)';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
