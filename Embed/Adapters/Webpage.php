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

class Webpage extends Adapter implements AdapterInterface {
	static public function check (Url $Url) {
		return true;
	}

	protected function initProviders (Url $Url) {
		$this->Url = $Url;

		$this->providers = array(
			'Html' => new Html($Url),
			'Dcterms' => new Dcterms($Url),
			'Facebook' => new Facebook($Url),
			'TwitterCards' => new TwitterCards($Url),
			'OpenGraph' => new OpenGraph($Url)
		);

		if ($this->providers['Html']->get('oembed')) {
			$this->providers['OEmbed'] = new OEmbed(new Url($Url->getAbsolute($this->providers['Html']->get('oembed'))));
		} else if (($OEmbed = OEmbedImplementations::create($Url))) {
			$this->providers['OEmbed'] = $OEmbed;
		}

		$this->providers = array_reverse($this->providers);
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

	public function getImages () {
		$images = array();

		foreach ($this->providers as $Provider) {
			$imgs = (array)$Provider->getImage();

			foreach ($imgs as $imgs) {
				if (!empty($imgs)) {
					$images[] = $this->Url->getAbsolute($imgs);
				}
			}
		}

		return array_unique($images);
	}

	public function getProviderIcons () {
		$icons = array();

		foreach ($this->providers as $Provider) {
			$ics = $Provider->getProviderIcon();

			if ($ics) {
				if (is_array($ics)) {
					foreach ($ics as $ics) {
						$icons[] = $this->Url->getAbsolute($ics);
					}
				} else {
					$icons[] = $this->Url->getAbsolute($ics);
				}
			}
		}

		$icons[] = $this->Url->getAbsolute('/favicon.png');
		$icons[] = $this->Url->getAbsolute('/favicon.ico');

		return array_unique($icons);
	}

	public function getTitle () {
		return $this->getFromProviders('title') ?: parent::getTitle();
	}

	public function getDescription () {
		return $this->getFromProviders('description');
	}

	public function getType () {
		$type = $this->getFromProviders('type');

		if ($type) {
			return $type;
		}

		$code = $this->code;

		if (empty($code)) {
			return 'link';
		}

		if (strpos($code, '</iframe>') || strpos($code, '</object>') || strpos($code, '</embed>') || strpos($code, '</script>')) {
			return 'rich';
		}

		return 'link';
	}

	public function getSource () {
		return $this->getUrlFromProviders('source');
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

	public function getProviderName () {
		return $this->getFromProviders('providerName') ?: parent::getProviderName();
	}

	public function getProviderUrl () {
		return $this->getUrlFromProviders('providerUrl') ?: parent::getProviderUrl();
	}

	public function getWidth () {
		return $this->getFromProviders('width');
	}

	public function getHeight () {
		return $this->getFromProviders('height');
	}

	public function getImageWidth () {
		return null;
	}

	public function getImageHeight () {
		return null;
	}
}
