<?php
namespace Embed\Adapters;

use Embed\Url;
use Embed\Providers\Provider;
use Embed\Providers\Html;
use Embed\Providers\OEmbed;
use Embed\Providers\OEmbedImplementations;
use Embed\Providers\OpenGraph;
use Embed\Providers\TwitterCards;

class Webpage {
	static public $settings = array();

	static public function check (Url $Url) {
		return true;
	}

	public function __construct (Url $Url, $followCanonical = true) {
		$this->Url = $Url;
		$this->Html = new Html($Url);
		$this->OpenGraph = new OpenGraph($Url);
		$this->TwitterCards = new TwitterCards($Url);

		if ($this->Html->get('oembed')) {
			$this->OEmbed = new OEmbed(new Url($Url->getAbsolute($this->Html->get('oembed'))));
		} else {
			$this->OEmbed = OEmbedImplementations::create($Url);
		}

		$canonical = $this->getUrl();

		if ($followCanonical && ($Url->getUrl() !== $canonical)) {
			static::__construct(new Url($canonical), false);
		}

		$this->setData();
	}

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

	public function getTitle () {
		if (isset($this->OEmbed) && $this->OEmbed->getTitle()) {
			return $this->OEmbed->getTitle();
		}

		return $this->OpenGraph->getTitle() ?: $this->TwitterCards->getTitle() ?: $this->Html->getTitle();
	}

	public function getDescription () {
		if (isset($this->OEmbed) && $this->OEmbed->getDescription()) {
			return $this->OEmbed->getDescription();
		}

		return $this->OpenGraph->getDescription() ?: $this->TwitterCards->getDescription() ?: $this->Html->getDescription();
	}

	public function getType () {
		if (isset($this->OEmbed) && $this->OEmbed->getType()) {
			return $this->OEmbed->getType();
		}

		return $this->OpenGraph->getType() ?: $this->TwitterCards->getType() ?: $this->Html->getType() ?: 'link';
	}

	public function getCode () {
		if (isset($this->OEmbed) && $this->OEmbed->getCode()) {
			$code = $this->OEmbed->getType();
		} else {
			$code = $this->OpenGraph->getCode() ?: $this->TwitterCards->getCode() ?: $this->Html->getCode();
		}

		if ($code) {
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
		if (isset($this->OEmbed) && $this->OEmbed->getUrl()) {
			return $this->OEmbed->getUrl();
		}

		return $this->OpenGraph->getUrl() ?: $this->TwitterCards->getUrl() ?: $this->Html->getUrl() ?: $this->Url->getUrl();
	}

	public function getAuthorName () {
		if (isset($this->OEmbed) && $this->OEmbed->getAuthorName()) {
			return $this->OEmbed->getAuthorName();
		}

		return $this->OpenGraph->getAuthorName() ?: $this->TwitterCards->getAuthorName() ?: $this->Html->getAuthorName();
	}

	public function getAuthorUrl () {
		if (isset($this->OEmbed) && $this->OEmbed->getAuthorUrl()) {
			return $this->OEmbed->getAuthorUrl();
		}

		return $this->OpenGraph->getAuthorUrl() ?: $this->TwitterCards->getAuthorUrl() ?: $this->Html->getAuthorUrl();
	}

	public function getProviderIcon () {
		if (($icon = $this->Html->getProviderIcon())) {
			return $icon;
		}

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
		if (isset($this->OEmbed) && $this->OEmbed->getProviderName()) {
			return $this->OEmbed->getProviderName();
		}

		return $this->OpenGraph->getProviderName() ?: $this->TwitterCards->getProviderName() ?: $this->Html->getProviderName() ?: $this->Url->getDomain();
	}

	public function getProviderUrl () {
		if (isset($this->OEmbed) && $this->OEmbed->getProviderUrl()) {
			return $this->OEmbed->getProviderUrl();
		}

		return $this->OpenGraph->getProviderUrl() ?: $this->TwitterCards->getProviderUrl() ?: $this->Html->getProviderUrl() ?: ($this->Url->getScheme().'://'.$this->Url->getHost());
	}

	public function getImage () {
		if (isset($this->OEmbed) && $this->OEmbed->getImage()) {
			return $this->OEmbed->getImage();
		}

		return $this->OpenGraph->getImage() ?: $this->TwitterCards->getImage() ?: $this->Html->getImage();
	}

	public function getWidth () {
		if (isset($this->OEmbed) && $this->OEmbed->getWidth()) {
			return $this->OEmbed->getWidth();
		}

		return $this->OpenGraph->getWidth() ?: $this->TwitterCards->getWidth() ?: $this->Html->getWidth();
	}

	public function getHeight () {
		if (isset($this->OEmbed) && $this->OEmbed->getHeight()) {
			return $this->OEmbed->getHeight();
		}

		return $this->OpenGraph->getHeight() ?: $this->TwitterCards->getHeight() ?: $this->Html->getHeight();
	}

	public function getAspectRatio () {
		$width = $this->getWidth();
		$height = $this->getHeight();

		if ($width && (strpos($width, '%') === false) && $height && (strpos($height, '%') === false)) {
			return round(($height / $width) * 100, 3);
		}
	}
}
