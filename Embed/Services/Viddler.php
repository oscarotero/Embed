<?php
namespace Embed\Services;

class Viddler extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://lab.viddler.com/services/oembed/',
			'patterns' => array(
				'http://www.viddler.com/v/*'
			)
		)
	);

	protected function setData () {
		parent::setData();

		$this->code = str_replace('http://www.viddler.com/v/', 'http://www.viddler.com/embed/', $this->code);
	}
}