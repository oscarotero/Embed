<?php
namespace Embed\Services;

class Scribd extends OEmbedService {
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
			$embed_url = preg_replace('|^http://www\.scribd\.com/doc/([\d]+)/(.*)$|', 'http://www.scribd.com/embeds/$1/content', $this->url);
			$this->code = '<iframe src="'.$embed_url.'" scrolling="no" width="100%" height="600" frameborder="0"></iframe>';
		}
	}
}