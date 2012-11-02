<?php
namespace Embed\Services;

class Revision3 extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://revision3.com/api/oembed/',
			'patterns' => array(
				'http://revision3.com/*'
			)
		)
	);
}