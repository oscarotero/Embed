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
		$this->Html = new Html($Url);
		$this->OpenGraph = new OpenGraph($Url);
		$this->TwitterCards = new TwitterCards($Url);
		$this->Dcterms = new Dcterms($Url);
		$this->Facebook = new Facebook($Url);

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

		return $this->OpenGraph->$method() ?: $this->TwitterCards->$method() ?: $this->Facebook->$method() ?: $this->Dcterms->$method() ?: $this->Html->$method();
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
		return ($url = $this->getFromProviders('url')) ? $this->Url->getAbsolute($url) : $this->Url->getUrl();
	}

	public function getAuthorName () {
		return $this->getFromProviders('authorName');
	}

	public function getAuthorUrl () {
		return ($url = $this->getFromProviders('authorUrl')) ? $this->Url->getAbsolute($url) : null;
	}

	public function getProviderIcon () {
		return ($url = $this->getFromProviders('providerIcon')) ? $this->Url->getAbsolute($url) : parent::getProviderIcon();
	}

	public function getProviderName () {
		return $this->getFromProviders('providerName') ?: parent::getProviderName();
	}

	public function getProviderUrl () {
		return ($url = $this->getFromProviders('providerUrl')) ? $this->Url->getAbsolute($url) : parent::getProviderUrl();
	}

	public function getImage () {
		return ($url = $this->getFromProviders('image')) ? $this->Url->getAbsolute($url) : null;
	}

	public function getWidth () {
		return $this->getFromProviders('width');
	}

	public function getHeight () {
		return $this->getFromProviders('height');
	}
}
