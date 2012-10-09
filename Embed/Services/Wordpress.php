<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Wordpress extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'https?://*.wordpress.com/*',
			'https?://wordpress.com/*',
			'http://wordpress.tv/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://public-api.wordpress.com/oembed/1.0/', $Url->getUrl(), 'json', array('for' => 'embed')));
	}
}