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

		$href = str_replace('/video/view/', '/video/embed/', $this->url);
		$this->code = '<iframe src="'.$href.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$this->width.'px; height:'.$this->height.'px;" allowTransparency="true"></iframe>';
		$this->providerName = 'MIT Media Lab';
	}
}