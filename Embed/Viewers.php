<?php
/**
 * Some helpers to generate code for the viewers
 */
namespace Embed;

class Viewers {
	private static function element ($name, array $attrs) {
		$str = "<$name";

		foreach ($attrs as $name => $value) {
			if ($value === null) {
				continue;
			} else if ($value === true) {
				$str .= " $name";
			} else if ($value !== false) {
				$str .= ' '.$name.'="'.htmlspecialchars($value).'"';
			}
		}

		return "$str>";
	}

	public static function videoHtml ($poster, $sources, $width = 0, $height = 0) {
		$code = self::element('video', array(
			'poster' => ($poster ?: null),
			'width' => ($width ?: null),
			'height' => ($height ?: null),
			'controls' => true
		));

		foreach ((array)$sources as $source) {
			$code .= self::element('source', array('src' => $source));
		}

		return $code.'</video>';
	}

	public static function audioHtml ($sources) {
		$code = "<audio controls>";

		foreach ((array)$sources as $source) {
			$code .= self::element('source', array('src' => $source));
		}

		return $code.'</audio>';
	}

	public static function imageHtml ($src, $alt = '', $width = 0, $height = 0) {
		return self::element('img', array(
			'src' => $src,
			'alt' => $alt,
			'width' => ($width ?: null),
			'height' => ($height ?: null)
		));
	}

	public static function iframe ($src, $width = 0, $height = 0, $extra_styles ='') {
		$width = $width ? (is_int($width) ? $width.'px' : $width) : '600px';
		$height = $height ? (is_int($height) ? $height.'px' : $height) : '400px';

		return self::element('iframe', array(
			'src' => $src,
			'frameborder' => 0,
			'allowTransparency' => 'true',
			'style' => "border:none;overflow:hidden;width:$width;height:$height;$extra_styles"
		)).'</iframe>';
	}

	public static function google ($src) {
		return self::iframe('http://docs.google.com/viewer?'.http_build_query(array(
			'url' => $src,
			'embedded' => 'true'
		)), 600, 600);
	}


	public static function flash ($src, $width = 0, $height = 0) {
		$code = self::element('object', array(
			'width' => $width ?: 600,
			'height' => $height ?: 400,
			'classid' => 'clsid:D27CDB6E-AE6D-11cf-96B8-444553540000',
			'codebase' => 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0'
		));

		$code .= self::element('param', array('name' => 'movie', 'value' => $src));
		$code .= self::element('param', array('name' => 'allowFullScreen', 'value' => 'true'));
		$code .= self::element('param', array('name' => 'allowScriptAccess', 'value' => 'always'));
		$code .= self::element('embed', array(
			'src' => $src,
			'width' => $width ?: 600,
			'height' => $height ?: 400,
			'type' => 'application/x-shockwave-flash',
			'allowFullScreen' => 'true',
			'allowScriptAccess' => 'always',
			'pluginspage' => 'http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash'
		));

		return $code.'</embed></object>';
	}
}
?>
