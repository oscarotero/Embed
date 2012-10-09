<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Dotsub extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://jsfiddle.net/*')) {
			return false;
		}

		$Url->setScheme('http');

		$Service = new static(new OpenGraph($Url->getUrl()));

		$Service->setProperty('html', '<iframe style="width: 100%; height: 300px" src="'.$Url->getUrl().'embedded/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>');
	}
}