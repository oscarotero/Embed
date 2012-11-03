<?php
namespace Embed\Services;

class N5min extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.5min.com/oembed.json',
			'patterns' => array(
				'http://www.5min.com/video/*'
			)
		)
	);
}