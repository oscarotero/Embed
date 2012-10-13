<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Yfrog extends Service {
	static public function create (Url $Url) {
		$patterns = array(
			'http://twitter.yfrog.com/*',
			'http://www.yfrog.com/*'
		);

		if (!$Url->match($patterns)) {
			return false;
		}

		return new static(new OEmbed('http://www.yfrog.com/api/oembed', $Url->getUrl()));
	}

	public function __construct (OEmbed $Provider) {
		parent::__construct($Provider);

		if ($this->Provider->isEmpty()) {
			return false;
		}

		//Fix thumbnail url
		$Provider->set('thumbnail_url', str_replace('/twitter.yfrog.com/', '/yfrog.com/', $Provider->get('thumbnail_url')));

		//Normalize type
		$Provider->set('type', 'photo');
	}
}