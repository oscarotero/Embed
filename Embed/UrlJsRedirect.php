<?php
/**
 * Class to manipulate urls
 */
namespace Embed;

class UrlJsRedirect {
	protected static $urls = array(
		'google' => 'https?://www.google.com/url*'
	);

	public static function resolve (Url $Url) {
		foreach (static::$urls as $method => $matches) {
			if ($Url->match($matches)) {
				static::$method($Url);

				return true;
			}
		}
		
		return false;
	}

	protected static function google (Url $Url) {
		if (($url = $Url->getParameter('url'))) {
			$Url->setUrl($url);
		}
	}
}