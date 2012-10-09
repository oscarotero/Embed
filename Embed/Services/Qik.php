<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Qik extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://qik.com/video/*')) {
			return false;
		}

		return new static(new OEmbed('http://qik.com/api/oembed.json', $Url->getUrl()));
	}
}