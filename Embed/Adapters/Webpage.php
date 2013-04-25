<?php
/**
 * Adapter to provide all information from any webpage (detects html meta tags, opengraph, twitter cards, oembed, etc)
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Providers\Html;
use Embed\Providers\OEmbed;
use Embed\Providers\OEmbedImplementations;
use Embed\Providers\OpenGraph;
use Embed\Providers\TwitterCards;
use Embed\Providers\Dcterms;
use Embed\Providers\Facebook;
use Embed\Providers\Images;

class Webpage extends Adapter implements AdapterInterface {
	public $providers = array();

	static public function check (Url $Url) {
		return true;
	}

	protected function initProviders (Url $Url) {
		$this->Url = $Url;

		$this->providers = array(
			'Html' => new Html($Url),
			'OpenGraph' => new OpenGraph($Url),
			'TwitterCards' => new TwitterCards($Url),
			'Dcterms' => new Dcterms($Url),
			'Facebook' => new Facebook($Url)
		);

		if ($this->providers['Html']->get('oembed')) {
			$this->providers['OEmbed'] = new OEmbed(new Url($Url->getAbsolute($this->providers['Html']->get('oembed'))));
		} else if (($OEmbed = OEmbedImplementations::create($Url))) {
			$this->providers['OEmbed'] = $OEmbed;
		}
	}

	public function getFromProviders ($name) {
		$method = 'get'.$name;

		foreach ($this->providers as $Provider) {
			if ($url = $Provider->$method()) {
				return $url;
			}
		}
	}

	public function getUrlFromProviders ($name) {
		$method = 'get'.$name;

		foreach ($this->providers as $Provider) {
			if ($url = $Provider->$method()) {
				return $this->Url->getAbsolute($url);
			}
		}
	}

	public function getImageFromProviders ($name) {
		$method = 'get'.$name;

		foreach ($this->providers as $Provider) {
			if ($url = $Provider->$method()) {
				$url = $this->Url->getAbsolute($url);

				if (Url::isImage($url)) {
					return $url;
				}
			}
		}
	}

	public function getTitle () {
		return $this->getFromProviders('title') ?: parent::getTitle();
	}

	public function getDescription () {
		return $this->getFromProviders('description');
	}

	public function getType () {
		return $this->getFromProviders('type') ?: 'link';
	}

	public function getCode () {
		if ($code = $this->getFromProviders('code')) {
			if (strpos($code, '</iframe>') !== false) {
				return preg_replace('|^.*(<iframe.*</iframe>).*$|', '$1', $code);
			}

			if (strpos($code, '</object>') !== false) {
				return preg_replace('|^.*(<object.*</object>).*$|', '$1', $code);
			}

			if (strpos($code, '</embed>') !== false) {
				return preg_replace('|^.*(<embed.*</embed>).*$|', '$1', $code);
			}

			return $code;
		}
	}

	public function getUrl () {
		return $this->getUrlFromProviders('url') ?: $this->Url->getUrl();
	}

	public function getAuthorName () {
		return $this->getFromProviders('authorName');
	}

	public function getAuthorUrl () {
		return $this->getUrlFromProviders('authorUrl');
	}

	public function getProviderIcon () {
		return $this->getImageFromProviders('providerIcon') ?: parent::getProviderIcon();
	}

	public function getProviderName () {
		return $this->getFromProviders('providerName') ?: parent::getProviderName();
	}

	public function getProviderUrl () {
		return $this->getUrlFromProviders('providerUrl') ?: parent::getProviderUrl();
	}

	public function getImage () {
		return $this->getImageFromProviders('image');
	}

	public function getWidth () {
		return $this->getFromProviders('width');
	}

	public function getHeight () {
		return $this->getFromProviders('height');
	}
}
