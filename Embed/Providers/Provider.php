<?php
/**
 * Abstract class with basic functions to all providers (data store, load content, etc)
 */
namespace Embed\Providers;

class Provider {
	protected $parameters = array();

	
	/**
	 * Save a value
	 * 
	 * @param string $name Name of the value
	 * @param string $value The value to save
	 */
	public function set ($name, $value) {
		$this->parameters[trim($name)] = is_string($value) ? trim($value) : $value;
	}


	/**
	 * Returns all stored values
	 * 
	 * @return array The values
	 */
	public function getAll () {
		return $this->parameters;
	}


	/**
	 * Get a value or null if not exists
	 * 
	 * @param string $name Value name
	 * 
	 * @return string/null
	 */
	public function get ($name) {
		return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
	}


	/**
	 * Check if a value exists
	 * 
	 * @param string $name Value name
	 * 
	 * @return boolean True if exists, false if not
	 */
	public function has ($name) {
		return isset($this->parameters[$name]);
	}


	/**
	 * Specific get values
	 */
	public function __call ($name, $arguments) {
		return null;
	}


	//Utils
	public static function getIframeCode ($href, $width = 0, $height = 0) {
		if (!$width) {
			$width = 600;
		}

		if (!$height) {
			$height = 400;
		}

		return '<iframe src="'.$href.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px;" allowTransparency="true"></iframe>';
	}

	public static function getFlashCode ($href, $width = 0, $height = 0) {
		if (!$width) {
			$width = 600;
		}

		if (!$height) {
			$height = 400;
		}

		return '<object width="'.$width.'" height="'.$height.'" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="'.$href.'" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><embed src="'.$href.'" width="'.$width.'" height="'.$height.'" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>';
	}

	public static function getVideoCode ($poster, array $sources, $width = 0, $height = 0) {
		$code = '<video poster="'.$poster.'" width="'.$width.'" height="'.$height.'" controls>';

		foreach ($sources as $source) {
			$code .= '<source src="'.$source.'">';
		}

		return $code.'</video>';
	}
}
?>
