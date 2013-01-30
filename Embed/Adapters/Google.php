<?php
/**
 * Adapter provider more information from google maps
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Viewers;

class Google extends Webpage implements AdapterInterface {
	static public function check (Url $Url) {
		return $Url->match(array(
			'https://maps.google.*'
		));
	}

	public function getCode () {
		$Url = clone $this->Url;

		$Url->setParameter('output', 'embed');
		$Url->setParameter('s', '');

		return Viewers::iframe($Url->getUrl());
	}
}
