<?php
/**
 * Provide information from Facebook Graph API.
 */
namespace Embed\Providers;

use Embed\Url;

class Facebook extends Provider {
	public function __construct (Url $Url) {
		$GraphUrl = new Url('https://graph.facebook.com/fql');
		$GraphUrl->setParameter('q', 'SELECT comments_fbid FROM link_stat WHERE url = "'.$Url->getUrl().'"');

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

	public function getUrl () {
		return $this->get('url');
	}

	public function getTitle () {
		return $this->get('title');
	}

	public function getDescription () {
		return $this->get('description');
	}

	public function getImage () {
		if ($images = $this->get('image')) {
			return $images[0]['url'];
		}
	}

	public function getWidth () {
		if (($images = $this->get('image')) && isset($images[0]['width'])) {
			return $images[0]['width'];
		}
	}

	public function getHeight () {
		if (($images = $this->get('image')) && isset($images[0]['height'])) {
			return $images[0]['height'];
		}
	}
}
?>