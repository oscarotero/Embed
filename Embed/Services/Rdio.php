<?php
namespace Embed\Services;

class Rdio extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.rdio.com/api/oembed/',
			'patterns' => array(
				'http://www.rdio.com/*'
			)
		)
	);
}