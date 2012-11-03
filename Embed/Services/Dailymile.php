<?php
namespace Embed\Services;

class Dailymile extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.dailymile.com/oembed',
			'patterns' => array(
				'http://www.dailymile.com/people/*/entries/*'
			)
		)
	);
}