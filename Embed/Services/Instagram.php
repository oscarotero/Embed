<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Instagram extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://instagram.com/p/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.instagram.com/oembed', $Url->getUrl()));
	}
}