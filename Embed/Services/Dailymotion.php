<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Dailymotion extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.dailymotion.com/video/*')) {
			return false;
		}

		return new static(new OEmbed('http://www.dailymotion.com/services/oembed', $Url->getUrl(), 'json', array(
			'wmode' => 'transparent'
		)));
	}
}