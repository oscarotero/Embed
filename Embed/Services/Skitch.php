<?php
namespace Embed\Services;

class Skitch extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://skitch.com/oembed/',
			'patterns' => array(
				'http://skitch.com/*',
				'http://img.skitch.com/*'
			)
		)
	);
}