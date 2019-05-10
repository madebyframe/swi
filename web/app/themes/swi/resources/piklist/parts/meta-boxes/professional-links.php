<?php
/*
 * Post Type: professional
 * Title: Links
 */

piklist('field', [
	'field' => 'socials',
	'type'  => 'group',
	'label' => 'Social Links',
	'add_more' => true,
	'fields' => [
		[
			'field'     => 'icon',
			'type'      => 'text',
			'label'     => 'Icon',
			'columns'   => 4
		], [
			'field'     => 'link',
			'type'      => 'url',
			'label'     => 'URL',
			'columns'   => 8
		]
	]
]);