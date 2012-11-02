<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Html;
use Embed\Providers\OpenGraph;

class Generic extends Service {
	public function __construct (Url $Url) {
		$this->Url = $Url;
		$this->Html = new Html($Url);

		if (!$this->Html->isEmpty()) {
			$this->OpenGraph = new OpenGraph($Url);

			$this->setData();
		}
	}

	public function hasData () {
		return $this->Html->isEmpty() ? false : true;
	}

	protected function setData () {
		$this->title = $this->OpenGraph->get('title') ?: $this->Html->get('title');
		$this->description = $this->OpenGraph->get('description') ?: $this->Html->get('description');
		$this->url = $this->OpenGraph->get('url') ?: $this->Url->getUrl();
		$this->type = 'link';
		$this->image = $this->OpenGraph->get('image');

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
