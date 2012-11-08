<?php
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

		$href = '//www.facebook.com/plugins/likebox.php?'.http_build_query(array(
			'href' => $this->Url->getUrl(),
			'width' => $this->width,
			'height' => $this->height,
			'colorscheme' => 'light',
			'show_faces' => 'false',
			'stream' => 'true',
			'header' => 'false'
		));

		$this->code = '<iframe src="'.$href.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$this->width.'px; height:'.$this->height.'px;" allowTransparency="true"></iframe>';
		$this->providerName = 'Facebook';
	}
}

