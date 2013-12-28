<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['module']['tag_enabler'] = array
(
	'module' => "Tag_enabler",
    'name' => "Tag enabler",
	'description' => "Enables the [/LANG]/tag/TAG_NAME view.",
	'author' => "Giacomo Furlan",
	'version' => "1.0",

	'uri' => 'tag',
	'has_admin'=> FALSE,
	'has_frontend'=> TRUE,

	// Array of resources
	// These resources will be added to the role's management panel
	// to allow / deny actions on them.
	'resources' => array(
		/*
		 * Default added resource : 'module/<module_key>'
		 *
		 * Important :
		 * 		The module has one default resource : 'access'
		 * 		If the main checkbox is checked for one role in the module's permissions,
		 * 		the role will:
		 * 		- See the module icon on the dashboard if the module has one admin panel
		 * 		- Have the module link in the menu "Modules" if the module has one admin panel
		 *
		 * Usage : Authority::can('access', 'module/<module_key>')
		 *
		 * Actions based rules (Added with this config file) :
		 * '<resource_key>' => array(
		 *		'title' => 'Resource title',
		 *		'actions' => '<action_key_1>, <action_key_2>, <action_key_3>',
		 *		'description' => 'Description of the resource in the role panel'
		 * )
		 * Usage : Authority::can('<action_key_1>', 'module/<module_key>/<resource_key>')
		 */
		// Authority::can('access', 'module/demo/admin')
			// Authority::can('access', 'module/demo/my_resource')
		/*'my_resource' => array(
			'title' => 'My Demo Module Resource',
			'actions' => 'edit,save,delete'
		),
		'my_resource/one_child_resource' => array
		(
			// Parent of the module's ressource in the resources tree
			'parent' => 'my_resource',
			'title' => 'One Child Resource',
			'actions' => 'action_1',
		),*/
	),
);

return $config['module']['tag_enabler'];
