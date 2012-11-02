<?php
namespace Embed\Services;

class Github extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'https://github.com/api/oembed',
			'patterns' => array(
				'https://gist.github.com/*'
			)
		)
	);
}