<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Justin extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.justin.tv/*')) {
			return false;
		}

		return new static(new OEmbed('http://api.justin.tv/api/embed/from_url.json', $Url->getUrl()));
	}
}