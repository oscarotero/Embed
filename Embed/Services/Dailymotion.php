<?php
namespace Embed\Services;

class Dailymotion extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.dailymotion.com/services/oembed',
			'patterns' => array(
				'http://www.dailymotion.com/video/*'
			),
			'params' => array(
				'wmode' => 'transparent'
			)
		)
	);
}