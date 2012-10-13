<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Youtube extends Service {
	static public function create (Url $Url) {
		if ($Url->match('http://www.youtube.com/embed/*')) {
			$Url = new Url('http://youtube.com/watch?v='.$Url->getDirectory(1));
		} else if (!$Url->match('https?://www.youtube.com/watch*') || !$Url->hasParameter('v')) {
			return false;
		}

		return new static(new OEmbed('http://www.youtube.com/oembed', $Url->getUrl()));
	}
}