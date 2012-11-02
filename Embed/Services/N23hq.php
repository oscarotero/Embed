<?php
namespace Embed\Services;

class N23hq extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.23hq.com/23/oembed',
			'patterns' => array(
				'http://www.23hq.com/*/photo/*',
				'http://23hq.com/*/photo/*'
			)
		)
	);
}