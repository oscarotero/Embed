<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Majorleaguegaming extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://tv.majorleaguegaming.com/videos/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://tv.majorleaguegaming.com/oembed', $Url->getUrl()));
	}
}