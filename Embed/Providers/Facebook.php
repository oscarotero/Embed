<?php
/**
 * Provide information from Facebook Graph API.
 */
namespace Embed\Providers;

use Embed\Url;

class Facebook extends Provider {
	private $init = false;
	private $url;

	public function __construct (Url $Url) {
		$this->url = $Url->getUrl();
	}

	private function init () {
		if ($this->init === true) {
			return true;
		}

		$this->init = true;

		$GraphUrl = new Url('https://graph.facebook.com/fql');
		$GraphUrl->setParameter('q', 'SELECT comments_fbid FROM link_stat WHERE url = "'.$this->url.'"');

		if (!$GraphUrl->isValid()) {
			return false;
		}

		if (($info = $GraphUrl->getJsonContent()) && isset($info['data'][0]['comments_fbid'])) {
			$GraphUrl = new Url('https://graph.facebook.com/'.$info['data'][0]['comments_fbid']);
			
			if ($json = $GraphUrl->getJsonContent()) {
				$this->set($json);
			}
		}
	}

	public function getTitle () {
		$this->init();

		return $this->get('title');
	}

	public function getDescription () {
		$this->init();

		return $this->get('description');
	}

	public function getImage () {
		$this->init();

		if ($images = $this->get('image')) {
			return $images[0]['url'];
		}
	}

	public function getWidth () {
		$this->init();

		if (($images = $this->get('image')) && isset($images[0]['width'])) {
			return $images[0]['width'];
		}
	}

	public function getHeight () {
		$this->init();

		if (($images = $this->get('image')) && isset($images[0]['height'])) {
			return $images[0]['height'];
		}
	}
}
?>