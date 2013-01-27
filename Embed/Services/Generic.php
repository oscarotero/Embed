<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Provider;
use Embed\Providers\Html;
use Embed\Providers\OEmbed;
use Embed\Providers\OpenGraph;
use Embed\Providers\TwitterCards;

class Generic extends Service {
	static public function check (Url $Url) {
		if (isset(static::$settings['patterns']) && !$Url->match(static::$settings['patterns'])) {
			return false;
		}
		if (isset(static::$settings['oembed']['patterns']) && !$Url->match(static::$settings['oembed']['patterns'])) {
			return false;
		}

		return $Url;
	}

	public function __construct (Url $Url) {
		$this->Url = $Url;
		$this->Html = new Html($Url);
		$this->OpenGraph = new OpenGraph($Url);
		$this->TwitterCards = new TwitterCards($Url);

		if ($this->Html->get('oembed')) {
			$oembedUrl = $Url->getAbsolute($this->Html->get('oembed'));
			$this->OEmbed = new OEmbed(new Url($oembedUrl));
		} else {
			$this->OEmbed = isset(static::$settings['oembed']) ? OEmbed::create($Url, static::$settings['oembed']) : new Provider();
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

			$this->$name = $this->OEmbed->$method() ?: $this->OpenGraph->$method() ?: $this->TwitterCards->$method();
		}

		//Calculate aspect ratio
		if ($this->width && (strpos($this->width, '%') === false) && $this->height && (strpos($this->height, '%') === false)) {
			$this->aspectRatio = round(($this->height / $this->width) * 100, 3);
		}

		//Clear extra code
		if (($html = $this->code)) {
			if (strpos($html, '</iframe>') !== false) {
				$html = preg_replace('|^.*(<iframe.*</iframe>).*$|', '$1', $html);
			} else if (strpos($html, '</object>') !== false) {
				$html = preg_replace('|^.*(<object.*</object>).*$|', '$1', $html);
			} else if (strpos($html, '</embed>') !== false) {
				$html = preg_replace('|^.*(<embed.*</embed>).*$|', '$1', $html);
			}

			$this->code = $html;
		}
	}
}
