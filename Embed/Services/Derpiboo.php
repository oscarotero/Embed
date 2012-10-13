<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Derpiboo extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://derpiboo.ru/*',
			'http://derpiboo.ru/images/*',
			'http://derpiboo.ru/thumbs/*',
			'http://derpiboo.ru/media/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://derpibooru.org/oembed.json', $Url->getUrl()));
	}
}