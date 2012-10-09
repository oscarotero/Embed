<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Deviantart extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://www.deviantart.com/art/*',
			'http://www.deviantart.com/#/d*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://backend.deviantart.com/oembed', $Url->getUrl(), 'json', array('for' => 'embed')));
	}
}