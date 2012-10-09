<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\OEmbed;

class Viddler extends Service {
	static public function create (Url $Url) {
		if (!$Url->match('http://www.viddler.com/v/*')) {
			return false;
		}

		return new static(new OEmbed('http://lab.viddler.com/services/oembed/', $Url->getUrl()));
	}

	public function __construct (OEmbed $Provider) {
		parent::__construct($Provider);

		//Fix embed code
		$Provider->setParameter('html', str_replace('http://www.viddler.com/v/', 'http://www.viddler.com/embed/', $Provider->getParameter('html')));
	}
}