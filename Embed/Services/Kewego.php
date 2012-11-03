<?php
namespace Embed\Services;

class Kewego extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.kewego.com/services/oembed/',
			'patterns' => array(
				'http://www.kewego.*/video/*'
			)
		)
	);
}