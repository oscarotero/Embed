<?php
/* ALPHA */
namespace Embed\Services;

class Mit extends Generic {
	static public $settings = array(
		'patterns' => array(
			'http://media.mit.edu/video/view/*',
			'http://www.media.mit.edu/video/view/*'
		)
	);

	protected function setData () {
		parent::setData();

		$this->width = 512;
		$this->height = 385;
		$this->providerName = 'MIT Media Lab';

		$this->setIframeCode(str_replace('/video/view/', '/video/embed/', $this->url));
	}
}