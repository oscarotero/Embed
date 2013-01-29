<?php
/**
 * Base Adapter extended by all adapters
 * 
 * Provide default functionalities
 */
namespace Embed\Adapters;

use Embed\Url;

abstract class Adapter {
	public function __construct (Url $Url) {
		$this->initProviders($Url);

		$canonical = $this->getUrl();

		if ($Url->getUrl() !== $canonical) {
			$this->initProviders(new Url($canonical));
		}

		$this->setData();
	}

	abstract protected function initProviders (Url $Url);

	protected function setData () {
		$properties = array(
			'title',
			'description',
			'type',
			'code',
			'url',
			'authorName',
			'authorUrl',
			'providerIcon',
			'providerName',
			'providerUrl',
			'image',
			'width',
			'height',
			'aspectRatio'
		);

		foreach ($properties as $name) {
			$method = 'get'.$name;

			$this->$name = $this->$method();
		}
	}

	public function getUrl () {
		return $this->Url->getUrl();
	}

	public function getProviderIcon () {
		$icon = $this->Url->getAbsolute('/favicon.png');

		if (@getimagesize($icon)) {
			return $icon;
		}

		$icon = $this->Url->getAbsolute('/favicon.ico');

		if (@getimagesize($icon)) {
			return $icon;
		}
	}

	public function getProviderName () {
		return $this->Url->getDomain();
	}

	public function getProviderUrl () {
		return ($this->Url->getScheme().'://'.$this->Url->getHost());
	}

	public function getAspectRatio () {
		$width = $this->getWidth();
		$height = $this->getHeight();

		if ($width && (strpos($width, '%') === false) && $height && (strpos($height, '%') === false)) {
			return round(($height / $width) * 100, 3);
		}
	}
}
