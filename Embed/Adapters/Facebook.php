<?php
/**
 * Adapter to provide information from facebook graph API
 */
namespace Embed\Adapters;

use Embed\Providers\Provider;
use Embed\Url;

class Facebook extends Webpage implements AdapterInterface {
	static public $access_token;

	public $Api;

	static public function setAccessToken ($access_token) {
		static::$access_token = $access_token;
	}

	static public function check (Url $Url) {
		return $Url->match(array(
			'https://www.facebook.com/*'
		));
	}

	protected function initProviders (Url $Url) {
		parent::initProviders($Url);

		$this->Api = new Provider();

		if (static::$access_token) {
			$StartingUrl = new Url($Url->getStartingUrl());

			if ($StartingUrl->hasParameter('fbid')) {
				$id = $StartingUrl->getParameter('fbid');
			} else if ($StartingUrl->getDirectory(0) === 'events') {
				$id = $StartingUrl->getDirectory(1);
			} else if ($StartingUrl->getDirectory(1) === 'posts') {
				$id = $StartingUrl->getDirectory(2);
			} else if ($StartingUrl->getDirectory(2) === 'posts') {
				$id = $StartingUrl->getDirectory(3);
			} else {
				$id = $StartingUrl->getDirectory(0);
			}

			if ($id) {
				$UrlApi = new Url('https://graph.facebook.com/'.$id);
				$UrlApi->setParameter('access_token', static::$access_token);

				if ($json = $UrlApi->getJsonContent()) {
					$this->Api->set($json);
				}
			}
		}
	}

	public function getTitle () {
		return $this->Api->get('name') ?: parent::getTitle();
	}

	public function getUrl () {
		return $this->Url->getStartingUrl();
	}

	public function getProviderName () {
		return 'Facebook';
	}

	public function getImage () {
		$id = $this->Api->get('id');

		if ($id) {
			return 'https://graph.facebook.com/'.$id.'/picture';
		}
		
		return parent::getImage();
	}
}
