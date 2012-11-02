<?php
namespace Embed\Services;

class Yfrog extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.yfrog.com/api/oembed',
			'patterns' => array(
				'http://twitter.yfrog.com/*',
				'http://www.yfrog.com/*'
			)
		)
	);

	protected function setData () {
		parent::setData();

		$this->image = str_replace('/twitter.yfrog.com/', '/yfrog.com/', $this->image);
		$this->image = str_replace(':small', ':medium', $this->image);

		$this->type = 'photo';

		$author = strstr($this->title, 'Shared by ');

		if ($author) {
			$this->authorName = trim(substr($author, 10));
			$this->authorUrl = "http://yfrog.com/user/$this->authorName/profile";
		}

		$this->title = null;
	}
}