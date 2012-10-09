<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Blip extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://blip.tv/*')) {
			return false;
		}

		return new static(new OEmbed('http://blip.tv/oembed/', $Url->getUrl()));
	}
}