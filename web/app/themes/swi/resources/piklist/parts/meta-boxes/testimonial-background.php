<?php
/*
 * Post Type: testimonial
 * Context: side
 * Title: Background Overlay
 */

piklist('field', [
	'field'     => 'overlay',
	'type'      => 'colorpicker',
	'label'     => 'Colour'
]);

piklist('field', [
	'field'     => 'opacity',
	'type'      => 'range',
	'label'     => 'Opacity',
	'attributes' => [
		'min'       => 0,
		'max'       => 100,
		'step'      => 1
	]
]);