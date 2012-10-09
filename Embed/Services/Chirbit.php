<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Chirbit extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://chirb.it/*')) {
			return false;
		}

		return new static(new OEmbed('http://chirb.it/oembed.json', $Url->getUrl()));
	}

	public function getImage () {
		return null;
	}
}