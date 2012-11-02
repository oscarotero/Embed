<?php
namespace Embed\Services;

class Imgur extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.imgur.com/oembed',
			'patterns' => array(
				'http://imgur.com/*'
			)
		)
	);
}