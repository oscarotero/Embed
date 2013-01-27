<?php
namespace Embed\Services;

class sChirb extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://chirb.it/oembed.json',
			'patterns' => array(
				'http://chirb.it/*'
			)
		)
	);

	protected function setData () {
		parent::setData();

		$this->image = null;
	}
}