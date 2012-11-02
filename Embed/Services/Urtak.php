<?php
namespace Embed\Services;

class Urtak extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://oembed.urtak.com/1/oembed',
			'patterns' => array(
				'https://urtak.com/u/*',
				'https://urtak.com/clr/*'
			)
		)
	);
}