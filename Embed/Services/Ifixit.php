<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Ifixit extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.ifixit.com/guide/*')) {
			return false;
		}

		return new static(new OEmbed('http://www.ifixit.com/embed', $Url->getUrl()));
	}
}