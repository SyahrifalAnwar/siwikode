<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Page';
$route['wisata'] = 'Page/wisata';
$route['kuliner'] = 'Page/kuliner';
$route['wisata/(:any)'] = 'Page/wisata/$1';
$route['kuliner/(:any)'] = 'Page/kuliner/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
