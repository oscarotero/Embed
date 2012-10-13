<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Skitch extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://skitch.com/*',
			'http://img.skitch.com/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://skitch.com/oembed/', $Url->getUrl()));
	}
}