<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Vhx extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://vhx.tv/*')) {
			return false;
		}

		return new static(new OEmbed('http://vhx.tv/services/oembed.json', $Url->getUrl()));
	}
}