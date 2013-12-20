<?php
/**
 * Adapter to provide information from soundcloud.com api
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Providers\Provider;

class Soundcloud extends Webpage implements AdapterInterface {
	public $Api;

	static public function check (Url $Url) {
		return $Url->match(array(
			'https?://soundcloud.com/*'
		));
	}

	protected function initProviders (Url $Url) {
		parent::initProviders($Url);

		$this->Api = new Provider();

		$UrlApi = new Url('http://api.soundcloud.com/resolve.json');
		$UrlApi->setParameter('client_id', isset($this->options['soundcloudClientId']) ? $this->options['soundcloudClientId'] : 'YOUR_CLIENT_ID');
		$UrlApi->setParameter('url', $Url->getUrl());

		if ($json = $UrlApi->getJsonContent()) {
			$this->Api->set($json);
		}
	}

	public function getTitle () {
		return $this->Api->get('title') ?: parent::getTitle();
	}

	public function getDescription () {
		return $this->Api->get('description') ?: parent::getDescription();
	}

	public function getUrl () {
		return $this->Api->get('permalink_url') ?: parent::getUrl();
	}

	public function getImages () {
		$images = parent::getImages();

		if (!$this->Api->get('artwork_url') && ($img = $this->Api->get('user', 'avatar_url'))) {
			array_unshift($images, str_replace('-large.jpg', '-t500x500.jpg', $img));
		}

		return array_unique($images);
	}

	public function getAuthorName () {
		return $this->Api->get('user', 'username') ?: parent::getAuthorName();
	}

	public function getAuthorUrl () {
		return $this->Api->get('user', 'permalink_url') ?: parent::getAuthorUrl();
	}
}
