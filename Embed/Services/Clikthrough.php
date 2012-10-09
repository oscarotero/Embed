<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Clikthrough extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.clikthrough.com/theater/video/*')) {
			return false;
		}

		return new static(new OEmbed('http://clikthrough.com/services/oembed', $Url->getUrl()));
	}
}