<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Slideshare extends Service {
	static public function create (Url $Url) {
		$matches = array(
			'http://slideshare.net/*',
			'http://www.slideshare.net/*'
		);

		if (!$Url->match($matches)) {
			return false;
		}

		return new static(new OEmbed('http://www.slideshare.net/api/oembed/2', $Url->getUrl()));
	}
}