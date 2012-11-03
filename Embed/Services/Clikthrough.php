<?php
namespace Embed\Services;

class Clikthrough extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://clikthrough.com/services/oembed',
			'patterns' => array(
				'http://www.clikthrough.com/theater/video/*'
			)
		)
	);
}