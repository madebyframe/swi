<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
	public function contacts(){
		$biz = get_option('biz');

		if(!is_array($biz['contacts']))
			return null;

		foreach($biz['contacts'] as $i => $b){
			if( $b['contact'] == 'phone' ){
				$biz['contacts'][$i]['link'] = 'tel://+1' . preg_replace('/[^0-9]/', '', $b['info']);
			}
			else if( $b['contact'] == 'email' ){
				$biz['contacts'][$i]['link'] = 'mailto:' . strtolower($b['info']) . '?subject=Website+Inquiry';
			}
			else if( $b['contact'] == 'link' ){
				$biz['contacts'][$i]['link'] = parse_url($b['info']);
			}
		}
		
		return $biz['contacts'];
	}

	public function address(){
		$biz = get_option('biz');

		if(!is_array($biz['address']))
			return null;

		foreach( $biz['address'] as $i => $a ){
			if( empty($a['street']) && empty($a['city']) ) {
				unset( $biz['address'][ $i ] );
				continue;
			}

			foreach(['street', 'city', 'postal'] as $field )
				if( empty($a[$field]) )
					unset( $a[$field] );

			if( empty($a['label']) )
				$a['label'] = 'Address';

			$biz['address'][ $a['label'] ] = $a;
			unset( $biz['address'][ $a['label'] ]['label'] );
			unset( $biz['address'][ $i ] );
		}

		return $biz['address'];
	}

	public function hours(){
		$biz = get_option('biz');
		$hours = [];

		if( !is_array($biz['hours']) )
			return null;

		foreach( $biz['hours'] as $hour ){
			if( !empty($hour['label']) && !empty($hour['hours']) )
				$hours[ $hour['label'] ] = $hour['hours'];
		}

		return $hours;
	}

}
