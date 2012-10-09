<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Rdio extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.rdio.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://www.rdio.com/api/oembed/', $Url->getUrl()));
	}
}