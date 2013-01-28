<?php
namespace Embed\Adapters;

use Embed\Url;
use Embed\Providers\Provider;

class Mit extends Webpage {

	static public function check (Url $Url) {
		return $Url->match(array(
			'http://media.mit.edu/video/view/*',
			'http://www.media.mit.edu/video/view/*'
		));
	}

	public function getCode () {
		$url = $this->getUrl();

		return Provider::getIframeCode(str_replace('/video/view/', '/video/embed/', $url));
	}

	public function getProviderName () {
		return 'MIT Media Lab';
	}
}
