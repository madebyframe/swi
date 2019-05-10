<?php
/*
 * Post Type: portfolio
 * Order: 2
 * Title: Photos
 */

piklist('field', [
	'field'     => 'photos',
	'type'      => 'group',
	'label'     => 'Photo Row(s)',
	'add_more' => true,
	'fields' => [
		[
			'field' => 'orientation',
			'type'  => 'select',
			'label' => 'Orientation',
			'columns' => 4,
			'value' => 'square',
			'choices' => [
				'landscape' => 'Landscape',
				'square' => 'Square',
				'portrait' => 'Portrait'
			]
		], [
			'field' => 'photo',
			'type'  => 'file',
			'label' => 'Photo(s)',
			'columns' => 8
		]
	]
]);