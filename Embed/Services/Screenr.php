<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Screenr extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.screenr.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://www.screenr.com/api/oembed.json', $Url->getUrl()));
	}
}