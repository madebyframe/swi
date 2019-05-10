<?php
/*
 * Title: Business Location
 * Setting: biz
 */

piklist('field', [
	'field'     => 'address',
	'type'      => 'group',
	'label'     => 'Address',
	'add_more'  => true,
	'fields' => [
		[
			'field'     => 'label',
			'type'      => 'text',
			'label'     => 'Label',
			'columns'   => 3,
			'value'     => 'Address',
		], [
			'field'     => 'street',
			'type'      => 'text',
			'label'     => 'Street Address',
			'columns'   => 4,
		], [
			'field'     => 'city',
			'type'      => 'text',
			'label'     => 'City',
			'columns'   => 3
		], [
			'field'     => 'postal',
			'type'      => 'text',
			'label'     => 'Postal',
			'columns'   => 2
		]
	]
]);