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

		if (class_exists($namespace.$class)) {
			$service = call_user_func(array($namespace.$class, 'create'), $Url, isset(self::$options[$class]) ? self::$options[$class] : array());

			if ($service && $service->hasData()) {
				return $service;
			}
		}

		foreach (self::$multidomainServices as $name) {
			if ($name === $class) {
				continue;
			}

			$service = call_user_func(array($namespace.$name, 'create'), $Url, isset(self::$options[$name]) ? self::$options[$name] : array());

			if ($service && $service->hasData()) {
				return $service;
			}
		}

		return false;
	}
}
?>
