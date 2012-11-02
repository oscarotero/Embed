<?php
namespace Embed\Services;

use Embed\Url;

class Dotsub extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://dotsub.com/services/oembed',
			'patterns' => array(
				'https?://dotsub.com/view/*'
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