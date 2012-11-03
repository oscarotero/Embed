<?php
namespace Embed\Services;

class Blip extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://blip.tv/oembed/',
			'patterns' => array(
				'http://blip.tv/*'
			)
		)
	);
}