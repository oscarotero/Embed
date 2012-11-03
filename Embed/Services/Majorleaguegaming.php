<?php
namespace Embed\Services;

class Majorleaguegaming extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://tv.majorleaguegaming.com/oembed',
			'patterns' => array(
				'http://tv.majorleaguegaming.com/videos/*'
			)
		)
	);
}