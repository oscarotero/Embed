<?php
/* ALPHA */
namespace Embed\Services;

class Facebook extends Generic {
	static public $settings = array(
		'patterns' => array(
			'https://www.facebook.com/*'
		)
	);

	protected function setData () {
		parent::setData();

		$this->width = 600;
		$this->height = 400;
		$this->providerName = 'Facebook';

		$this->setIframeCode('//www.facebook.com/plugins/likebox.php?'.http_build_query(array(
			'href' => $this->Url->getUrl(),
			'width' => $this->width,
			'height' => $this->height,
			'colorscheme' => 'light',
			'show_faces' => 'false',
			'stream' => 'true',
			'header' => 'false'
		)));
	}
}
