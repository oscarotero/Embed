<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Dotsub extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('https?://dotsub.com/view/*')) {
			return false;
		}

		$Url->setScheme('http');

		return new static(new OEmbed('http://dotsub.com/services/oembed', $Url->getUrl()));
	}
}