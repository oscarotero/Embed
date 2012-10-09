<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class N23hq extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://www.23hq.com/*/photo/*',
			'http://23hq.com/*/photo/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://www.23hq.com/23/oembed', $Url->getUrl()));
	}
}