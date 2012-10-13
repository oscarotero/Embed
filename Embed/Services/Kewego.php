<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Kewego extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.kewego.*/video/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.kewego.com/services/oembed/', $Url->getUrl()));
	}
}