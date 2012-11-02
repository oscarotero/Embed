<?php
namespace Embed\Services;

use Embed\Url;

class Flickr extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.flickr.com/services/oembed/',
			'patterns' => array(
				'https?://*.flickr.com/photos/*/*',
				'https?://flickr.com/photos/*/*'
			)
		)
	);

	static public function check (Url $Url) {
		if (($Url = parent::check($Url))) {
			$Url->setScheme('http');
		}

		return $Url;
	}
}