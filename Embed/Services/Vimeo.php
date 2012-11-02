<?php
namespace Embed\Services;

class Vimeo extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://vimeo.com/api/oembed.json',
			'patterns' => array(
				'http://vimeo.com/*'
			)
		)
	);
}