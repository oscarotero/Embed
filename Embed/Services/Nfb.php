<?php
namespace Embed\Services;

class Nfb extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.nfb.ca/remote/services/oembed/',
			'format' => 'xml',
			'patterns' => array(
				'http://www.nfb.ca/film/*'
			)
		)
	);

	protected function setData () {
		parent::setData();

		$this->description = $this->OEmbed->get('video_description');
	}
}