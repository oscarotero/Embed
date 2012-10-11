<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Nfb extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.nfb.ca/film/*')) {
			return false;
		}

		return new static(new OEmbed('http://www.nfb.ca/remote/services/oembed/', $Url->getUrl(), 'xml'));
	}

	public function getDescription () {
		return $this->Provider->get('video_description');
	}
}