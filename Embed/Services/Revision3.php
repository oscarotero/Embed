<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Revision3 extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://revision3.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://revision3.com/api/oembed/', $Url->getUrl()));
	}
}