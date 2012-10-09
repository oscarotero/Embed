<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Soundcloud extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://soundcloud.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://soundcloud.com/oembed', $Url->getUrl()));
	}
}