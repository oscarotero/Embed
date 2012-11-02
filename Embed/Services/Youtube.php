<?php
namespace Embed\Services;

use Embed\Url;

class Youtube extends OEmbedService {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.youtube.com/oembed',
			'format' => 'json'
		)
	);

	static public function check (Url $Url) {
		if ($Url->match('http://www.youtube.com/embed/*')) {
			return new Url('http://youtube.com/watch?v='.$Url->getDirectory(1));
		}

		if ($Url->match('https?://www.youtube.com/watch*') && $Url->hasParameter('v')) {
			return $Url;
		}

		return false;
	}
}