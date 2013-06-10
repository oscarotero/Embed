<?php
/**
 * Adapter to get the embed code from codepen
 */
namespace Embed\Adapters;

use Embed\Url;

class Github extends Webpage implements AdapterInterface {
	static public function check (Url $Url) {
		return $Url->match(array(
			'https://gist.github.com/*/*'
		));
	}

	public function getCode () {
		$url = $this->getUrl();

		if (substr($url, -1) === '/') {
			$url = substr($url, 0, -1);
		}

		return '<script src="'.$url.'.js"></script>';
	}

	public function getUrl () {
		return $this->Url->getUrl();
	}

	public function getProviderName () {
		return 'Gist';
	}

	public function getProviderUrl () {
		return 'https://gist.github.com';
	}
}
