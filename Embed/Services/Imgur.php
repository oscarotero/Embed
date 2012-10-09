<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Imgur extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://imgur.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.imgur.com/oembed', $Url->getUrl()));
	}
}