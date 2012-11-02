<?php
namespace Embed\Services;

use Embed\Url;

class Twitter extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'https://api.twitter.com/1/statuses/oembed.json',
			'patterns' => array(
				'https?://twitter.com/*/status/*'
			)
		)
	);

	static public function check (Url $Url) {
		if (($Url = parent::check($Url))) {
			$Url->splicePath(3);
		}

		return $Url;
	}
}
