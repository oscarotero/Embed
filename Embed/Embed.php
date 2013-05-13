<?php
namespace Embed;

class Embed {
	public static function create (Url $Url) {
		if (!$Url->isValid()) {
			return false;
		}

		//If is a file use File Adapter
		if (Adapters\File::check($Url)) {
			return new Adapters\File($Url);
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
	}

	public static function createSource (Url $Url) {
		if (!$Url->isValid()) {
			return false;
		}

		//If is a xml feed (rss/atom)
		if (Sources\Feed::check($Url)) {
			return new Sources\Feed($Url);
		}

		return false;
	}
}
?>
