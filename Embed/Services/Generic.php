<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Html;
use Embed\Providers\OpenGraph;
use Embed\Providers\TwitterCards;

class Generic extends Service {
	public function __construct (Url $Url) {
		$this->Url = $Url;
		$this->Html = new Html($Url);

		if (!$this->Html->isEmpty()) {
			$this->OpenGraph = new OpenGraph($Url);
			$this->TwitterCards = new TwitterCards($Url);

			$this->setData();
		}
	}

	public function hasData () {
		return $this->Html->isEmpty() ? false : true;
	}

	protected function setData () {
		$this->title = $this->OpenGraph->get('title') ?: $this->TwitterCards->get('title') ?: $this->Html->get('title');
		$this->description = $this->OpenGraph->get('description') ?: $this->TwitterCards->get('description') ?: $this->Html->get('description');
		$this->url = $this->OpenGraph->get('url') ?: $this->TwitterCards->get('url') ?: $this->Html->get('canonical') ?: $this->Url->getUrl();
		$this->type = 'link';
		$this->image = $this->OpenGraph->get('image') ?: $this->TwitterCards->get('image') ?: $this->Html->get('image_src');

		if ($this->image) {
			$this->width = $this->OpenGraph->get('image:width');
			$this->height = $this->OpenGraph->get('image:height');
		}

		$host = parse_url($this->url, PHP_URL_HOST);
		$this->providerName = $host;
		$this->providerUrl = "http://$host";
		$this->providerIcon = $this->Html->get('icon');
	}
}
