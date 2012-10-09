<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Photobucket extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://*.photobucket.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://s51.photobucket.com/oembed/', $Url->getUrl()));
	}
}