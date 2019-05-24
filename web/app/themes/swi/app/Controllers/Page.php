<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{
	public function contentColumns(){
		$columns = get_post_field('columns');

		if(!is_array($columns))
			return [];

		return $columns;
	}
	
	public function portfolio(){
		$portfolio = get_posts([
			'post_type' => 'portfolio',
			'posts_per_page' => 12
		]);

		if( !is_array($portfolio))
			return null;

		foreach( $portfolio as $i => $item )
			continue;

		return $portfolio;
	}

	public function pageVideo(){
		return get_post_field('pageVideo');
	}
}
