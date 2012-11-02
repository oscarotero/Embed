<?php
namespace Embed\Services;

class Distrify extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://distrify.com/oembed.json',
			'patterns' => array(
				'http://distrify.com/films/*',
				'http://muvi.es/*',
				'http://muvi.es/*/*'
			)
		)
	);
}