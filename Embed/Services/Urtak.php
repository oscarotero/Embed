<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Urtak extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'https://urtak.com/u/*',
			'https://urtak.com/clr/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://oembed.urtak.com/1/oembed', $Url->getUrl()));
	}
}