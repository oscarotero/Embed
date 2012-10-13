<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Dailymile extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.dailymile.com/people/*/entries/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.dailymile.com/oembed', $Url->getUrl()));
	}
}