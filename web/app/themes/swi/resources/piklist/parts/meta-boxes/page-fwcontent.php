<?php
/*
 * Post Type: page
 * Template: views/template-portfolio.blade.php
 * Title: Full Width Content
 * Order: 1
 */

piklist('field', [
	'field'     => 'fwcontent',
	'type'      => 'editor',
	'template'  => 'field',
	'options'   => [
		'teeny' => false,
		'quicktags' => true,
		'media_buttons' => true
	]
]);