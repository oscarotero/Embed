<?php
namespace Embed\Services;

class Jsfiddle extends Generic {
	static public $settings = array(
		'patterns' => array(
			'http://jsfiddle.net/*'
		)
	);

	protected function setData () {
		parent::setData();

		$embed_url = $this->url.((substr($this->url, -1) === '/') ? 'embedded/' : '/embedded/');
		$this->code = '<iframe style="width: 100%; height: 300px" src="'.$embed_url.'" allowfullscreen="allowfullscreen" frameborder="0"></iframe>';

	}
}
