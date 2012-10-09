<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Flickr extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'https?://*.flickr.com/photos/*',
			'https?://flickr.com/photos/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		$Url->setScheme('http');

		return new static(new OEmbed('http://www.flickr.com/services/oembed/', $Url->getUrl()));
	}
}