<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Mixcloud extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.mixcloud.com/*/*')) {
			return false;
		}

		return new static(new OEmbed('http://www.mixcloud.com/oembed/', $Url->getUrl()));
	}
}