<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function subtitle()
    {
    	return get_post_field('subtitle');
    }


	public function heroBackground(){

		$rgba = self::rgba( get_post_field('heroOverlay'), get_post_field('heroOpacity' ) );
		$img = wp_get_attachment_url(get_post_meta(get_the_ID(), 'heroBackground', true), 'full');

		if(!$rgba || $rgba == 'transparent')
			return "url($img)";

		return "linear-gradient( $rgba, $rgba ), url($img)";
	}

	public function hero(){
		return get_post_field('hero');
	}

	public function heroTeaser(){
    	return get_post_field('teaser');
	}

//	public function heroButtons(){
//		$buttons = get_post_field('heroButtons');
//
//		if(empty($buttons) || !is_array($buttons))
//			return null;
//
//		foreach( $buttons as $i => $b )
//			if( empty($b['link']) || empty($b['label']) )
//				unset($buttons[$i]);
//
//		if( count($buttons) < 1 )
//			return null;
//
//		return $buttons;
//	}
//
//	public function heroCta(){
//		if( $id = get_post_field('heroCta') )
//			return self::ctaSection($id);
//
//		return false;
//	}

	public function heroVideo(){
		$video = get_post_field('heroVideo');

		if( !is_array($video) )
			return null;

		if( empty($video['mp4']) && empty($video['webm']) )
			return null;

		if( !is_array($video['mp4']) && !is_array($video['webm']) )
			return null;

		if( (is_array($video['mp4']) && empty($video['mp4'][0])) &&
		    (is_array($video['webm']) && empty($video['webm'][0])) )
			return null;

		return $video;
	}

	public function staff(){
    	$staff = get_posts([
    		'post_type' => 'professional',
		    'posts_per_page' => 6
	    ]);

    	if(!is_array($staff))
    		return null;

    	foreach( $staff as $i => $s ){
    		foreach( ['qualifications', 'position', 'socials'] as $field )
    		    $staff[ $i ]->$field = get_post_meta( $s->ID, $field, true );
	    }

	    return $staff;
	}


	public function gallery(){
		$gallery = get_post_meta(get_the_ID(), 'gallery', false);

		if(!is_array($gallery))
			return null;

		foreach($gallery as $i => $g)
			if( empty($g) )
				unset($gallery[$i]);

		if( count($gallery) < 1)
			return null;

		return $gallery;
	}

	public function gallery2(){
		$gallery = get_post_meta(get_the_ID(), 'gallery2', false);

		if(!is_array($gallery))
			return null;

		foreach($gallery as $i => $g)
			if( empty($g) )
				unset($gallery[$i]);

		if( count($gallery) < 1)
			return null;

		return $gallery;
	}


	public function testimonials(){
		$t = get_posts([
			'post_type'     => 'testimonial',
			'count'         => 7,
		]);

		return $t;
	}

	public static function rgba( $color, $alpha ) {
		$hex = $color;
		$alpha = intval($alpha) / 100;



		if( empty($hex) )
			return 'transparent';

		list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
		return "rgba($r, $g, $b, $alpha)";
	}
}
