<?php
namespace Embed\Services;

class Speakerdeck extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://speakerdeck.com/oembed.json',
			'patterns' => array(
				'https://speakerdeck.com/*'
			)
		)
	);
}