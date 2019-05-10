<?php
/*
 * Post Type: page
 * Template: default, views/template-company.blade.php, views/template-portfolio.blade.php
 * Title: Hero Section
 */

global $buttonChoices;

piklist('field', [
	'field'     => 'heroBackground',
	'label'     => 'Background Image',
	'type'      => 'file'
]);

piklist('field', [
	'field'     => 'heroVideo',
	'label'     => 'Background Video',
	'type'      => 'group',
	'add_more'  => false,
	'fields'    => [
		[
			'field'  => 'mp4',
			'label'  => 'MP4',
			'type'   => 'file',
			'columns' => 6
		], [
			'field'  => 'webm',
			'label'  => 'WebM',
			'type'   => 'file',
			'columns' => 6
		]
	]
]);

piklist('field', [
	'field'     => 'heroOverlay',
	'type'      => 'colorpicker',
	'label'     => 'Overlay Colour'
]);

piklist( 'field', [
	'field'     => 'heroOpacity',
	'type'      => 'range',
	'label'     => 'Opacity',
	'columns'  => 3,
	'attributes' => [
		'min'       => 0,
		'max'       => 100,
		'step'      => 1
	]
]);

piklist('field', [
	'field'     => 'hero',
	'label'     => 'Headline',
	'type'      => 'editor',
	'columns'   => 12
]);

if( get_the_ID() != get_option('page_on_front') ) {
	piklist( 'field', [
		'field'   => 'teaser',
		'label'   => 'Teaser',
		'type'    => 'text',
		'columns' => 12
	] );
}
/*
piklist('field', [
	'field'     => 'heroButtons',
	'type'      => 'group',
	'label'     => 'Buttons',
	'add_more'  => true,
	'fields'    => [
		[
			'field'     => 'label',
			'type'      => 'text',
			'label'     => 'Label on Button',
			'columns'   => 6
		], [
			'field'     => 'target',
			'label'     => 'Open in New Window?',
			'type'      => 'select',
			'columns'   => 6,
			'choices' => [
				'_blank'    => 'Yes',
				'_self'     => 'No'
			]
		], [
			'field'     => 'link',
			'label'     => 'Button Link',
			'type'      => 'url',
			'columns'   => 6
		], [
			'field'     => 'class',
			'type'      => 'select',
			'label'     => 'Style',
			'columns'   => 6,
			'choices'   => //$buttonChoices
				[
					'btn btn-primary white' => 'Black on White',
					'btn btn-primary' => 'Black on Transparent'
				]
		]
	]
]);
*/