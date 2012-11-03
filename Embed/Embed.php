<?php
namespace Embed;

class Embed {
	public static function create ($url) {
		$Url = new Url($url);

		if (!$Url->isValid()) {
			return false;
		}

		$namespace = 'Embed\\Services\\';
		$class = str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $Url->getDomain()))));

		if (ctype_digit($class[0])) {
			$class = 'N'.$class;
		}

		$class = $namespace.$class;

		if (class_exists($class)) {
			if (($ServiceUrl = call_user_func(array($class, 'check'), $Url)) !== false) {
				$Service = new $class($ServiceUrl);

				if ($Service->hasData()) {
					return $Service;
				}
			}
		}

		$Service = new Services\Generic($Url);

		if ($Service->hasData()) {
			return $Service;
		}

		return false;
	}
}
?>
