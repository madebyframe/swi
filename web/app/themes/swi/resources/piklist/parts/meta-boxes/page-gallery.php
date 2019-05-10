<?php
/*
 * Post Type: page
 * Template: views/page.blade.php, views/template-gallery.blade.php, views/template-company.blade.php, views/template-portfolio.blade.php
 * Title: Gallery
 * Order: 10
 */

piklist('field', [
	'field'     => 'gallery',
	'type'      => 'file',
	'label'     => 'Photo',
]);

piklist('field', [
	'field'     => 'gallery2',
	'type'      => 'file',
	'label'     => 'Second Row',
	'description' => 'For best results, put the same number of photos in each row.'
]);

