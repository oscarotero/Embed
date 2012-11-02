<?php
namespace Embed\Services;

class Smugmug extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.smugmug.com/services/oembed/',
			'patterns' => array(
				'http://www.smugmug.com/*'
			)
		)
	);
}