<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Twitter extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('https?://twitter.com/*/status/*')) {
			return false;
		}

		$Url->splicePath(3);

		return new static(new OEmbed('https://api.twitter.com/1/statuses/oembed.json', $Url->getUrl()));
	}
}