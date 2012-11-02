<?php
namespace Embed\Services;

class Wordpress extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://public-api.wordpress.com/oembed/1.0/',
			'patterns' => array(
				'https?://*.wordpress.com/*',
				'https?://wordpress.com/*',
				'http://wordpress.tv/*'
			),
			'params' => array(
				'for' => 'embed'
			)
		)
	);
}