<?php
namespace Embed\Services;

class Rdio extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.rdio.com/api/oembed/',
			'patterns' => array(
				'http://www.rdio.com/*'
			)
		)
	);
}