<?php
namespace Embed\Services;

class Jest extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.jest.com/oembed.json',
			'patterns' => array(
				'http://www.jest.com/video/*',
				'http://www.jest.com/embed/*'
			)
		)
	);
}