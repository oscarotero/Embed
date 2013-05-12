<?php
/**
 * Adapter to get more info from parleys.com
 */
namespace Embed\Adapters;

use Embed\Url;

class Parleys extends Webpage implements AdapterInterface {
	static public function check (Url $Url) {
		// http://www.parleys.com/#st=5&id=2912&sl=0
		if ($Url->match(['*.parleys.com/#*'])) {
			return true;
		}

		return false;
	}

	public function getUrl () {
		$fragments = $this->Url->getFragmentArray();

		if (!empty($fragments['id'])) {
			return 'http://parleys.com/d/'.$fragments['id'];
		}

		if ($this->Url->hasParameter('id')) {
			return 'http://parleys.com/d/'.$this->Url->getParameter('id'); 
		}
		
		return parent::getUrl();
	}

	public function getProviderIcon () {
		return 'http://parleys.com/favicon.ico';
	}
}
