<?php
/**
 * Base Adapter extended by all adapters
 * 
 * Provide default functionalities
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\FastImage;

abstract class Adapter {
	public $providers = array();
	public $options = array(
		'minImageWidth' => 0,
		'minImageHeight' => 0
	);

	abstract protected function initProviders (Url $Url);

	public function __construct (Url $Url) {
		$this->initProviders($Url);

		if ($Url->getUrl() !== $this->url) {
			$this->initProviders(new Url($this->url));
		}
	}

	public function __get ($name) {
		$method = 'get'.$name;

		if (method_exists($this, $method)) {
			return $this->$name = $this->$method();
		}
	}

	public function getTitle () {
		return $this->Url->getUrl();
	}

	public function getUrl () {
		return $this->Url->getUrl();
	}

	public function getAspectRatio () {
		$width = $this->width;
		$height = $this->height;

		if ($width && (strpos($width, '%') === false) && $height && (strpos($height, '%') === false)) {
			return round(($height / $width) * 100, 3);
		}
	}

	public function getImage () {
		foreach ($this->images as $image) {
			try {
				$Image = new FastImage($image);
			} catch (\Exception $Exception) {
				continue;
			}
			

			if ($Image->getType()) {
				list($width, $height) = $Image->getSize();

				if (($width >= $this->options['minImageWidth']) && ($height >= $this->options['minImageHeight'])) {
					$this->imageWidth = $width;
					$this->imageHeight = $height;

					return $image;
				}
			}
		}
	}

	public function getProviderIcon () {
		foreach ($this->providerIcons as $icon) {
			try {
				$Icon = new FastImage($icon);
			} catch (\Exception $Exception) {
				continue;
			}

			if ($Icon->getType()) {
				return $icon;
			}
		}
	}

	public function getProviderName () {
		return $this->Url->getDomain();
	}

	public function getProviderUrl () {
		return ($this->Url->getScheme().'://'.$this->Url->getDomain(true));
	}
}
