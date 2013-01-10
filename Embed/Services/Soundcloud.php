<?php
namespace Embed\Services;

class Soundcloud extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://soundcloud.com/oembed',
			'patterns' => array(
				'https?://soundcloud.com/*'
			)
		)
	);
}
