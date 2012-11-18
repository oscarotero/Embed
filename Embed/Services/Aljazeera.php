<?php
namespace Embed\Services;

class Aljazeera extends Generic {
	static public $settings = array(
		'patterns' => array(
			'http://www.aljazeera.com/news/*',
		)
	);

	protected function setData () {
		parent::setData();

		if ($this->OpenGraph->get('video:type') === 'application/x-shockwave-flash') {
			$this->width = 420;
			$this->height = 267;

			$this->setFlashCode($this->OpenGraph->get('video'));
		}

		$this->providerName = 'Al Jazeera';
	}
}

