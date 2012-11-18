<?php
namespace Embed\Services;

class Scribd extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.scribd.com/services/oembed',
			'patterns' => array(
				'http://www.scribd.com/doc/*'
			)
		)
	);

	protected function setData () {
		parent::setData();

		if (!$this->code) {
			$this->width = 400;
			$this->height = 600;

			$this->setIframeCode(preg_replace('|^http://www\.scribd\.com/doc/([\d]+)/(.*)$|', 'http://www.scribd.com/embeds/$1/content', $this->url));
		}
	}
}