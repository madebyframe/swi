<?php



add_filter('piklist_post_types', function ($post_types) {
	$post_types['portfolio'] = [
		'labels'                => piklist( 'post_type_labels', 'Portfolio' ),
		'title'                 => 'Name',
		'supports'              => [
			'title',
//			'author',
			'thumbnail',
			'editor'
		],
		'hide_meta_box'         => [ 'author', 'revisions', 'comments', 'commentstatus' ],
		'public'                => true,
		'has_archive'           => true,
		'hide_post_row_actions' => [ 'quick-edit' ],
		'hide_screen_options'   => true,
		'exclude_from_search'   => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'             => 'dashicons-images-alt2'
	];

	return $post_types;
});

add_filter('piklist_taxonomies', function ($taxonomies) {
	$taxonomies[] = [
		'post_type'     => 'portfolio',
		'name'          => 'services',
		'show_admin_column' => true,
		'configuration' => [
			'heirarchical' => false,
			'labels' => piklist('taxonomy_labels', 'Service'),
			'hide_meta_box' => false,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => ['slug' => 'services']
		]
	];

	return $taxonomies;
});