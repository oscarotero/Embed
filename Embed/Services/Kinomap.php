<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Kinomap extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://www.kinomap.com/*kms*',
			'http://kinomap.com/*kms*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://www.kinomap.com/oembed', $Url->getUrl()));
	}

	public function getImage () {
		return null;
	}
}