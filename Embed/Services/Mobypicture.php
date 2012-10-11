<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Mobypicture extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://www.mobypicture.com/user/*/view/*',
			'http://moby.to/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://api.mobypicture.com/oEmbed', $Url->getUrl()));
	}

	public function getProviderName () {
		return $this->Provider->get('provider');
	}
}