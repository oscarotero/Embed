<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Jest extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://www.jest.com/video/*',
			'http://www.jest.com/embed/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://www.jest.com/oembed.json', $Url->getUrl()));
	}
}