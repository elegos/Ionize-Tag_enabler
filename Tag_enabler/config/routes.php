<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

$route['default_controller'] = "tag_enabler";
$route[''] = 'tag_enabler/index';
// $route['(.*)'] = "tag_enabler/index/$1";

// To be able to add customs controllers
// 1. Comment the previous line : $route['(.*)'] = "demo/index/$1";
// 2. Uncomment these lines
$route['404_override'] = 'tag_enabler';
$route['(.*)'] = "/$1";
