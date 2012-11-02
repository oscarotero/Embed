<?php
namespace Embed\Services;

class Blip extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://blip.tv/oembed/',
			'patterns' => array(
				'http://blip.tv/*'
			)
		)
	);
}