<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Embedly extends Service {
	static public function create (Url $Url, array $options) {
		if (isset($options['key'])) {
			return new static(new OEmbed('http://api.embed.ly/1/oembed', $Url->getUrl(), 'json', array(
				'key' => $options['key']
			)));
		}

		return false;
	}
}