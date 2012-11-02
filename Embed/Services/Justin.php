<?php
namespace Embed\Services;

class Justin extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.justin.tv/api/embed/from_url.json',
			'patterns' => array(
				'http://www.justin.tv/*'
			)
		)
	);
}