<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Speakerdeck extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('https://speakerdeck.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://speakerdeck.com/oembed.json', $Url->getUrl()));
	}
}