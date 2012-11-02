<?php
namespace Embed\Services;

use Embed\Url;

abstract class Service {
	static public $settings = array();

	public $title;
	public $description;
	public $code;
	public $url;
	public $type;
	public $authorName;
	public $authorUrl;
	public $providerIcon;
	public $providerName;
	public $providerUrl;
	public $image;
	public $width;
	public $height;
	public $aspectRatio;

	static public function check (Url $Url) {
		return (!isset(static::$settings['patterns']) || $Url->match(static::$settings['patterns'])) ? $Url : false;
	}
}