<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Smugmug extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.smugmug.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.smugmug.com/services/oembed/', $Url->getUrl()));
	}
}