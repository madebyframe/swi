<?php


add_filter('piklist_admin_pages', function($pages){
	$pages[] = [
		'page_title' => 'Business Info',
		'menu_title' => 'Business',
		'sub_menu' => 'themes.php',
		'capbility' => 'manage_options',
		'menu_slug' => 'biz',
		'setting' => 'biz',
		'menu_icon' => 'dashicons-store',
		'page_icon' => 'dashicons-store',
		'single_line' => true,
		'save_text' => 'Update Business Info'
	];

	return $pages;
});