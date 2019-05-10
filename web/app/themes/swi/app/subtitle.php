<?php

// add subtitle field, but only for pages

add_action('edit_form_after_title', function(){

	if( !function_exists('get_current_screen') )
		return;

	if( get_current_screen()->post_type != 'page' )
		return;

	piklist('field', [
		'type'  => 'text',
		'field' => 'subtitle',
		'template' => 'field',
		'attributes' => [
			'class' => 'large-text',
			'placeholder' => 'Page Subtitle (optional)'
		]
	]);
});