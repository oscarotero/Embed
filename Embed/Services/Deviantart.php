<?php
namespace Embed\Services;

class Deviantart extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://backend.deviantart.com/oembed',
			'patterns' => array(
				'http://www.deviantart.com/art/*',
				'http://www.deviantart.com/#/d*'
			),
			'params' => array(
				'for' => 'embed'
			)
		)
	);
}