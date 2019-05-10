<?php



add_filter('piklist_post_types', function ($post_types) {
	$post_types['testimonial'] = [
		'labels'                => piklist( 'post_type_labels', 'Testimonials' ),
		'title'                 => 'Name',
		'supports'              => [
			'title',
//			'author',
			'thumbnail',
			'editor'
		],
		'hide_meta_box'         => [ 'slug', 'author', 'revisions', 'comments', 'commentstatus' ],
		'public'                => false,
		'has_archive'           => false,
		'hide_post_row_actions' => [ 'quick-edit' ],
		'hide_screen_options'   => true,
		'exclude_from_search'   => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'             => 'dashicons-heart'
	];

	return $post_types;
});


function testiomnials_load( $count=-1 ){
	return get_posts([
		'post_type'     => 'testimonial',
		'count'         => $count,
	]);
}
