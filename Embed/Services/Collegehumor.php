<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Collegehumor extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.collegehumor.com/video/*')) {
			return false;
		}

		return new static(new OEmbed('http://www.collegehumor.com/oembed.json', $Url->getUrl()));
	}
}