<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Meetup extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.meetup.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.meetup.com/oembed', $Url->getUrl()));
	}
}