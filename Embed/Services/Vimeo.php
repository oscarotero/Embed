<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Vimeo extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://vimeo.com/*')) {
			return false;
		}

		return new static(new OEmbed('http://vimeo.com/api/oembed.json', $Url->getUrl()));
	}
}