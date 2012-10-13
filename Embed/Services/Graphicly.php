<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Graphicly extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://graphicly.com/*/*/*')) {
			return false;
		}

		return new static(new OEmbed('http://oembed.graphicly.com/1/oembed', $Url->getUrl()));
	}
}