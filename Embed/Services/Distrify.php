<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Distrify extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://distrify.com/films/*',
			'http://muvi.es/*',
			'http://muvi.es/*/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://distrify.com/oembed.json', $Url->getUrl()));
	}
}