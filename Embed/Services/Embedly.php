<?php
namespace Embed\Services;

use Embed\Url;

class Embedly extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.embed.ly/1/oembed',
			'params' => array(
				'key' => null
			)
		)
	);

	static public function check (Url $Url) {
		if (!isset(static::$settings['oembed']['params']['key'])) {
			return false;
		}

		return $Url;
	}
}