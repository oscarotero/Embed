<?php
namespace Embed\Adapters;

use Embed\Providers\Provider;
use Embed\Url;

class Facebook extends Webpage {
	static public $access_token;

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

		$this->Facebook = new Provider();

		if (static::$access_token) {
			$StartingUrl = new Url($Url->getStartingUrl());

			if ($StartingUrl->hasParameter('fbid')) {
				$id = $StartingUrl->getParameter('fbid');
			} else if ($StartingUrl->getDirectory(0) === 'events') {
				$id = $StartingUrl->getDirectory(1);
			} else if ($StartingUrl->getDirectory(1) === 'posts') {
				$id = $StartingUrl->getDirectory(2);
			} else {
				$id = $StartingUrl->getDirectory(0);
			}

			if ($id) {
				$UrlApi = new Url('https://graph.facebook.com/'.$id);
				$UrlApi->setParameter('access_token', static::$access_token);

				if ($json = $UrlApi->getJsonContent()) {
					$this->Facebook->set($json);
				}
			}
		}
	}

	public function getTitle () {
		return $this->Facebook->get('name') ?: parent::getTitle();
	}

	public function getDescription () {
		return $this->Facebook->get('description') ?: parent::getDescription();
	}

	public function getUrl () {
		return $this->Facebook->get('link') ?: $this->Url->getStartingUrl();
	}

	public function getProviderName () {
		return 'Facebook';
	}

	public function getImage () {
		$id = $this->Facebook->get('id');

		if ($id) {
			return 'https://graph.facebook.com/'.$id.'/picture';
		}
		
		return parent::getImage();
	}

	public function getWidth () {
		return $this->Facebook->get('width') ?: parent::getWidth();
	}

	public function getHeight () {
		return $this->Facebook->get('height') ?: parent::getHeight();
	}
}
