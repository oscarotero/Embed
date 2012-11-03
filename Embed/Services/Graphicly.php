<?php
namespace Embed\Services;

class Graphicly extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://oembed.graphicly.com/1/oembed',
			'patterns' => array(
				'http://graphicly.com/*/*'
			)
		)
	);
}