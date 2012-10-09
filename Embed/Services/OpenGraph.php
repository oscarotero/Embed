<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Provider;
use Embed\Providers\OpenGraph as OpenGraphProvider;

class OpenGraph extends Service {
	static public function create (Url $Url) {
		$OpenGraph = new OpenGraphProvider($Url->getUrl());

		if (!$OpenGraph->isEmpty()) {
			return new static($OpenGraph);
		}

		return false;
	}

	public function __construct (Provider $Provider) {
		parent::__construct($Provider);

		//Fix type
		$this->Provider->setParameter('type', 'link');

		//Fix provider name
		if (!$this->Provider->hasParameter('site_name')) {
			$this->Provider->setParameter('site_name', parse_url($this->getUrl(), PHP_URL_HOST));
		}
	}

	public function getImage () {
		return $this->Provider->getParameter('image');
	}

	public function getProviderName () {
		return $this->Provider->getParameter('site_name');
	}
}