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

	public function get ($name = null, $subname = null) {
		if ($this->init === false) {
			$this->init();
		}

		return parent::get($name, $subname);
	}

	public function getTitle () {
		return $this->get('title');
	}

	public function getDescription () {
		return $this->get('description');
	}

	public function getImage () {
		$images = array();

		if ($imgs = $this->get('image')) {
			foreach ($imgs as $img) {
				$images[] = $img['url'];
			}
		}

		return $images;
	}

	public function getAuthorName () {
		$author = $this->get('data', 'author') ?: $this->get('admins');

		if (isset($author[0]['name'])) {
			return $author[0]['name'];
		}
	}

	public function getAuthorUrl () {
		$author = $this->get('data', 'author') ?: $this->get('admins');

		if (isset($author[0]['url'])) {
			return $author[0]['url'];
		}
	}

	public function getProviderName () {
		return $this->get('site_name');

	}
}
?>