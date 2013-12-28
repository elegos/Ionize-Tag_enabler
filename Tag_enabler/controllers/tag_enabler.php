<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tag_Enabler extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();

		// MODELS
		$this->load->model('article_model', 'article_model', TRUE);

		// some weird magic
		TagManager::$context->register("pages", Pages::get_pages());
		
		// register menus and pages (for <ion:navigation> tags)
		foreach(TagManager::$context->registry('menus') as $m)
			if($m['name'] == 'main')
				TagManager::$context->register("menu", $m);
			
		foreach(TagManager::$context->registry('pages') as $p)
			if($p['id_menu'] == 1)
				TagManager::$context->register("page", $p);
	}

	function index()
	{
		$uri = explode('/', $_SERVER['REQUEST_URI']);
		$index = array_search('tag', $uri);
		$tag = urldecode($uri[$index+1]);

		// HACK to display the custom title
		TagManager::$context->register("page",
			array('id_subnav' => 0,
				'meta_title' => 'Tag - ' . $tag)
			);
		TagManager::render('tag');
	}
}
