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

class Webpage extends Adapter implements AdapterInterface {
	static public function check (Url $Url) {
		return true;
	}

	protected function initProviders (Url $Url) {
		$this->Url = $Url;
		$this->Html = new Html($Url);
		$this->OpenGraph = new OpenGraph($Url);
		$this->TwitterCards = new TwitterCards($Url);

		if ($this->Html->get('oembed')) {
			$this->OEmbed = new OEmbed(new Url($Url->getAbsolute($this->Html->get('oembed'))));
		} else {
			$this->OEmbed = OEmbedImplementations::create($Url);
		}
	}

	public function getFromProviders ($name) {
		$method = 'get'.$name;

		if (isset($this->OEmbed) && ($value = $this->OEmbed->$method())) {
			return $value;
		}

		return $this->OpenGraph->$method() ?: $this->TwitterCards->$method() ?: $this->Html->$method();
	}

	public function getTitle () {
		return $this->getFromProviders('title');
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
		return $this->getFromProviders('url') ?: $this->Url->getUrl();
	}

	public function getAuthorName () {
		return $this->getFromProviders('authorName');
	}

	public function getAuthorUrl () {
		return $this->getFromProviders('authorUrl');
	}

	public function getProviderIcon () {
		return $this->getFromProviders('providerIcon') ?: parent::getProviderIcon();
	}

	public function getProviderName () {
		return $this->getFromProviders('providerName') ?: parent::getProviderName();
	}

	public function getProviderUrl () {
		return $this->getFromProviders('providerUrl') ?: parent::getProviderUrl();
	}

	public function getImage () {
		return $this->getFromProviders('image');
	}

	public function getWidth () {
		return $this->getFromProviders('width');
	}

	public function getHeight () {
		return $this->getFromProviders('height');
	}
}
