<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class N5min extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.5min.com/video/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.5min.com/oembed.json', $Url->getUrl()));
	}
}