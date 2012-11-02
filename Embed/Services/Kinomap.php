<?php
namespace Embed\Services;

class Kinomap extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.kinomap.com/oembed',
			'patterns' => array(
				'http://www.kinomap.com/*',
				'http://kinomap.com/*'
			)
		)
	);

	protected function setData () {
		parent::setData();

		$this->image = null;
	}
}