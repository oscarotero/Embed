<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Guardian extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.guardian.co.uk/discussion/comment-permalink/*')) {
			return false;
		}

		return new static(new OEmbed('http://discussionapi.guardian.co.uk/discussion-api/oembed', $Url->getUrl()));
	}
}