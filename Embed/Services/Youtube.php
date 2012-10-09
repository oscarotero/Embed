<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Youtube extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://www.youtube.com/watch*',
			'https://www.youtube.com/watch*'
		);

		if ($Url->match('http://www.youtube.com/embed/*')) {
			$Url = new Url('http://youtube.com/watch?v='.$Url->getPath(1));
		} else if (!$Url->match($patterns) || !$Url->hasParameter('v')) {
			return false;
		}

		return new static(new OEmbed('http://www.youtube.com/oembed', $Url->getUrl()));
	}
}