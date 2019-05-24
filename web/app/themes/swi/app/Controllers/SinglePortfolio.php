<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePortfolio extends Controller
{
	public function portfolioSubtitle() {
		return get_post_field( 'subtitle' );
	}

	public function location() {
		return get_post_field( 'location' );
	}

	public function services(){
		$services = wp_get_post_terms(get_the_ID(), 'services');

		return $services;
	}


	public function pphotos(){
		$photos = get_post_field('photos' );

		if(!is_array($photos)) return [];

		foreach($photos as $i => $ph)
		{
			if( !isset($ph['photo']) || !is_array($ph['photo']) || !$ph['photo'][0] )
				unset($photos[$i]);
		}

		return $photos;
	}


	public function pvid(){
		return get_post_field('pvid');
	}

/*
	public function pgallery(){
		$gallery = get_post_meta(get_the_ID(), 'pgallery', false);

		if(!is_array($gallery))
			return null;

		foreach($gallery as $i => $g)
			if( empty($g) )
				unset($gallery[$i]);

		if( count($gallery) < 1)
			return null;

		return $gallery;
	}*/
}
