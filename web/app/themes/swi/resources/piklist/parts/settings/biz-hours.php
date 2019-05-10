<?php
/*
 * Title: Business Hours
 * Setting: biz
 */

piklist('field', [
	'field'     => 'hours',
	'type'      => 'group',
	'label'     => 'Hours',
	'description' => '(or other info)',
	'add_more'  => true,
	'fields' => [
		[
			'field'     => 'label',
			'type'      => 'text',
			'label'     => 'Label',
			'columns'   => 3,
		], [
			'field'     => 'hours',
			'type'      => 'textarea',
			'label'     => 'Information',
			'columns'   => 9,
		],
	]
]);