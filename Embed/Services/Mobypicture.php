<?php
namespace Embed\Services;

class Mobypicture extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://api.mobypicture.com/oEmbed',
			'patterns' => array(
				'http://www.mobypicture.com/user/*/view/*',
				'http://moby.to/*'
			)
		)
	);

	protected function setData () {
		parent::setData();

		$this->providerName = $this->OEmbed->get('provider');
	}
}