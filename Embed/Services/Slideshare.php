<?php
namespace Embed\Services;

class Slideshare extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.slideshare.net/api/oembed/2',
			'patterns' => array(
				'http://slideshare.net/*',
				'http://www.slideshare.net/*'
			)
		)
	);
}