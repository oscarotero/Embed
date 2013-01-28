<?php
namespace Embed\Adapters;

use Embed\Providers\Provider;

class Jsfiddle extends Webpage {
	
	public function getCode () {
		$url = $this->getUrl();

		$embed_url = $url.((substr($url, -1) === '/') ? 'embedded/' : '/embedded/');

		return Provider::getIframeCode($embed_url, '100%', 300);
	}
}
