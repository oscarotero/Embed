<?php
/**
 * Generic Dublin Core provider.
 * Load the Dublin Core data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class API extends Provider {
	public function __construct (Url $Url) {
        print_r($Url);
        exit;
	}

	public function hasApiEndPoint () {
		return $this->get('api_end_point') ? true : false;
	}

	public function getApi () {
		$end_point = $this->get('api_end_point');
        if($end_point)
        {
            
        }
        return false;
	}
}
?>
