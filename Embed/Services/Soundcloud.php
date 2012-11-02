<?php
namespace Embed\Services;

class Soundcloud extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://soundcloud.com/oembed',
			'patterns' => array(
				'http://soundcloud.com/*'
			)
		)
	);
}