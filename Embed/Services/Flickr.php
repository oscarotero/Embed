<?php
namespace Embed\Services;

use Embed\Url;

class Flickr extends Generic {
	static public $settings = array(
		'oembed' => array(
			'endPoint' => 'http://www.flickr.com/services/oembed/',
			'patterns' => array(
				'https?://*.flickr.com/photos/*/*',
				'https?://flickr.com/photos/*/*'
			)
		)
	);

	static public function check (Url $Url) {
		//Fix mobile specific url
		if ($Url->match('http://m.flickr.com/#/*')) {
			$Url->setHost('flickr.com');
			$Url->setPath($Url->getPath().$Url->getFragment());
		}

		if (($Url = parent::check($Url))) {
			$Url->setScheme('http');
		}

		if ($Url->match('http://www.youtube.com/embed/*')) {
			return new Url('http://youtube.com/watch?v='.$Url->getDirectory(1));
		}

		if ($Url->match('https?://www.youtube.com/watch*') && $Url->hasParameter('v')) {
			return $Url;
		}

		return $Url;
	}
}