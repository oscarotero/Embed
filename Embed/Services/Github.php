<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Github extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'https://gist.github.com/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('https://github.com/api/oembed', $Url->getUrl()));
	}
}