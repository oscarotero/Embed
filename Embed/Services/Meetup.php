<?php
namespace Embed\Services;

class Meetup extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.meetup.com/oembed',
			'patterns' => array(
				'http://www.meetup.com/*'
			)
		)
	);
}