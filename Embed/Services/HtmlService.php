<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Html;

abstract class HtmlService extends Service {
	public $Url;
	public $Html;

	static public function check (Url $Url) {
		return $Url->match(static::$settings['patterns']) ? $Url : false;
	}

	public function __construct (Url $Url) {
		$this->Url = $Url;
		$this->Html = new Html($Url);

		if (!$this->Html->isEmpty()) {
			$this->setData();
		}
	}

	public function hasData () {
		return $this->Html->isEmpty() ? false : true;
	}

	protected function setData () {
		$this->title = $this->Html->get('title');
		$this->description = $this->Html->get('description');
		$this->url = $this->Url->getUrl();
		$this->type = 'link';

		$host = parse_url($this->url, PHP_URL_HOST);
		$this->providerName = $host;
		$this->providerUrl = "http://$host";
		$this->providerIcon = $this->Html->get('icon');
	}
}