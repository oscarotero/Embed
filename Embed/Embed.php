<?php
namespace Embed;

class Embed {
	public static function create (Url $Url) {
		if (!$Url->isValid()) {
			return false;
		}

		//Search the adapter using the domain
		$class = 'Embed\\Adapters\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $Url->getDomain()))));

		if (class_exists($class)) {
			if (call_user_func(array($class, 'check'), $Url)) {
				return new $class($Url);
			}
		}

		if (Adapters\Webpage::check($Url)) {
			return new Adapters\Webpage($Url);
		}

		return false;


		//Check if the url is a file
		if (($ServiceUrl = Services\File::check($Url))) {
			return new Services\File($ServiceUrl);
		}

		//Search the service using the domain
		$namespace = 'Embed\\Services\\';
		$class = str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $Url->getDomain()))));

		if (ctype_digit($class[0])) {
			$class = 'N'.$class;
		}

		$class = $namespace.$class;

		if (class_exists($class)) {
			if (($ServiceUrl = call_user_func(array($class, 'check'), $Url)) !== false) {
				return new $class($ServiceUrl);
			}
		}

		//Using Embedly
		/*
		if (($ServiceUrl = Services\Embedly::check($Url))) {
			return new Services\Embedly($ServiceUrl);
		}
		*/

		//Generic web page
		if (($ServiceUrl = Services\Generic::check($Url))) {
			return new Services\Generic($ServiceUrl);
		}

		return false;
	}
}
?>
