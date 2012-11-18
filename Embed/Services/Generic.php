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

		if (!$this->Html->isEmpty()) {
			$this->OpenGraph = new OpenGraph($Url);
			$this->TwitterCards = new TwitterCards($Url);
			$this->OEmbed = isset(static::$settings['oembed']) ? new OEmbed($Url, static::$settings['oembed']) : new Provider();

			$this->setData();
		}
	}

	protected function setData () {
		$this->title = $this->OEmbed->get('title') ?: $this->OpenGraph->get('title') ?: $this->TwitterCards->get('title') ?: $this->Html->get('title');
		$this->description = $this->OEmbed->get('description') ?: $this->OpenGraph->get('description') ?: $this->TwitterCards->get('description') ?: $this->Html->get('description');
		$this->code = $this->OEmbed->get('html');
		$this->url = $this->OpenGraph->get('url') ?: $this->TwitterCards->get('url') ?: $this->Html->get('canonical') ?: $this->Url->getUrl();
		$this->authorName = $this->OEmbed->get('author_name');
		$this->authorUrl = $this->OEmbed->get('author_url');
		$this->providerIcon = $this->Html->get('icon');
		$this->providerName = $this->OEmbed->get('provider_name') ?: $this->Url->getHost();
		$this->providerUrl = $this->OEmbed->get('provider_url') ?: ($this->Url->getScheme().'://'.$this->Url->getHost());

		//Type
		$type = $this->OEmbed->get('type') ?: $this->OpenGraph->get('type') ?: $this->TwitterCards->get('card');

		if (strpos($type, ':') !== false) {
			$type = substr(strrchr($type, ':'), 1);
		}

		switch ($type) {
			case 'video':
			case 'photo':
			case 'link':
			case 'rich':
				$this->type = $type;
				break;

			case 'movie':
				$this->type = 'video';

			default:
				$this->type = 'link';
		}

		//Image
		if (($this->type === 'photo') && ($img = $this->OEmbed->get('url')) && @getimagesize($img)) {
			$this->image = $img;
		} else if (($img = $this->OEmbed->get('thumbnail_url')) && @getimagesize($img)) {
			$this->image = $img;
		} else if (($img = $this->OpenGraph->get('image')) && @getimagesize($img)) {
			$this->image = $img;
		} else if (($img = $this->TwitterCards->get('image')) && @getimagesize($img)) {
			$this->image = $img;
		} else if (($img = $this->Html->get('image_src')) && @getimagesize($img)) {
			$this->image = $img;
		} else if (($img = $this->Html->get('image')) && @getimagesize($img)) {
			$this->image = $img;
		}

		//Dimmensions
		$this->width = $this->OEmbed->get('width') ?: $this->OpenGraph->get('image:width') ?: $this->OpenGraph->get('video:width');
		$this->height = $this->OEmbed->get('height') ?: $this->OpenGraph->get('image:height') ?: $this->OpenGraph->get('video:height');

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
