<?php
namespace Embed\Services;

class Photobucket extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://s51.photobucket.com/oembed/',
			'patterns' => array(
				'http://*.photobucket.com/*'
			)
		)
	);
}