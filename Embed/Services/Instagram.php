<?php
namespace Embed\Services;

class Instagram extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.instagram.com/oembed',
			'patterns' => array(
				'http://instagram.com/p/*'
			)
		)
	);
}