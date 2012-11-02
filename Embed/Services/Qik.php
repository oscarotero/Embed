<?php
namespace Embed\Services;

class Qik extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://qik.com/api/oembed.json',
			'patterns' => array(
				'http://qik.com/video/*'
			)
		)
	);
}