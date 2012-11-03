<?php
namespace Embed\Services;

class Screenr extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.screenr.com/api/oembed.json',
			'patterns' => array(
				'http://www.screenr.com/*'
			)
		)
	);
}