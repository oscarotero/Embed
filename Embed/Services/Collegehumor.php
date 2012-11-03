<?php
namespace Embed\Services;

class Collegehumor extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.collegehumor.com/oembed.json',
			'patterns' => array(
				'http://www.collegehumor.com/video/*'
			)
		)
	);
}