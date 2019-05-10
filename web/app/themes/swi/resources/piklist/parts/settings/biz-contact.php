<?php
/*
 * Title: Contact Info
 * Setting: biz
 */

piklist('field', [
	'field'     => 'contacts',
	'type'      => 'group',
	'label'     => 'Contacts',
	'add_more'  => true,
	'fields' => [
		[
			'field'     => 'contact',
			'type'      => 'select',
			'label'     => 'Contact Type',
			'columns'   => 4,
			'choices' => [
				'phone' => 'Phone',
				'email' => 'Email',
				'link'  => 'link',
				'other' => 'Other',
			]
		], [
			'field'     => 'label',
			'type'      => 'text',
			'label'     => 'Label',
			'columns'   => 4
		], [
			'field'     => 'info',
			'type'      => 'text',
			'label'     => 'Info',
			'columns'   => 4
		]
	]
]);