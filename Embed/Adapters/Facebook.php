<?php
/**
 * Adapter to provide information from facebook graph API
 */
namespace Embed\Adapters;

use Embed\Providers\Provider;
use Embed\Url;

class Facebook extends Webpage implements AdapterInterface {
	public $Api;

	static public function check (Url $Url) {
		return $Url->match(array(
			'https://www.facebook.com/*'
		));
	}

	protected function initProviders (Url $Url) {
		parent::initProviders($Url);

		$this->Api = new Provider();

		if ($this->options['facebookAccessToken']) {
			$StartingUrl = new Url($Url->getStartingUrl());

			if ($StartingUrl->hasParameter('fbid')) {
				$id = $StartingUrl->getParameter('fbid');
			} else if ($StartingUrl->hasParameter('story_fbid')) {
				$id = $StartingUrl->getParameter('story_fbid');
			} else if ($StartingUrl->getDirectory(0) === 'events') {
				$id = $StartingUrl->getDirectory(1);
			} else if ($StartingUrl->getDirectory(0) === 'pages') {
				$id = $StartingUrl->getDirectory(2);
			} else if ($StartingUrl->getDirectory(1) === 'posts') {
				$id = $StartingUrl->getDirectory(2);
			} else if ($StartingUrl->getDirectory(2) === 'posts') {
				$id = $StartingUrl->getDirectory(3);
			} else {
				$id = $StartingUrl->getDirectory(0);
			}

			if ($id) {
				$UrlApi = new Url('https://graph.facebook.com/'.$id);
				$UrlApi->setParameter('access_token', $this->options['facebookAccessToken']);

				if ($json = $UrlApi->getJsonContent()) {
					$this->Api->set($json);
				}
			}
		}
	}

	public function getTitle () {
		return $this->Api->get('name') ?: parent::getTitle();
	}

	public function getDescription () {
		return $this->Api->get('description') ?: $this->Api->get('about') ?: parent::getTitle();
	}

	public function getUrl () {
		return $this->Api->get('link') ?: $this->Url->getStartingUrl();
	}

	public function getProviderName () {
		return 'Facebook';
	}

	public function getSource () {
		$id = $this->Api->get('id');

		if ($id) {
			return 'https://www.facebook.com/feeds/page.php?id='.$id.'&format=rss20';
		}
	}

	public function getImages () {
		$images = parent::getImages();

		$id = $this->Api->get('id');

		if ($id) {
			array_unshift($images, 'https://graph.facebook.com/'.$id.'/picture');
		}
		
		return $images;
	}
}
