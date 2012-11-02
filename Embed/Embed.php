<?php
namespace Embed;

class Embed {
	static public $options = array();
	static public $multidomainServices = array(
		'Chirbit',
		'Mobypicture',
		'Distrify',

		'Generic',
		'Embedly',
	);

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

		$fullClass = $namespace.$class;

		if (class_exists($fullClass)) {
			if (($ServiceUrl = call_user_func(array($fullClass, 'check'), $Url)) !== false) {
				$Service = new $fullClass($ServiceUrl);

				if ($Service->hasData()) {
					return $Service;
				}
			}
		}

		foreach (self::$multidomainServices as $name) {
			if ($name === $class) {
				continue;
			}

			$fullClass = $namespace.$name;

			if (class_exists($fullClass)) {
				if (($ServiceUrl = call_user_func(array($fullClass, 'check'), $Url)) !== false) {
					$Service = new $fullClass($ServiceUrl);

					if ($Service->hasData()) {
						return $Service;
					}
				}
			}
		}

		return false;
	}
}
?>
