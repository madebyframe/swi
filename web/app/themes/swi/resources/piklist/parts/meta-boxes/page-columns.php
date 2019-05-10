<?php
/*
 * Post Type: page
 * Template: default, views/template-company.blade.php, views/template-portfolio.blade.php
 * Title: Columns
 */

piklist('field', [
	'field' => 'columns',
	'type'  => 'group',
	'label' => 'Content Columns',
	'add_more' => true,
	'fields' => [
		[
			'field' => 'colorder',
			'type'  => 'select',
			'label' => 'Arrangement',
			'columns' => 6,
			'choices' => [
				'cp' => 'Text, then Photo',
				'pc' => 'Photo, then Text'
			]
		], [
			'field'     => 'photo',
			'type'      => 'file',
			'label'     => 'Photo',
			'description' => '(landscape)',
			'columns'   => 12
		], [
			'field'     => 'content',
			'type'      => 'editor',
			'label'     => 'Text',
			'columns'   => 12,
			'template'  => 'field',
			'options' => [
				'teeny' => false,
				'quicktags' => true,
			]
		]
	]
]);
