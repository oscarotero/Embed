<?php
namespace Embed\Services;

use Embed\Url;

abstract class Service {
	static public $settings = array();

	public $title;
	public $description;
	public $code;
	public $url;
	public $authorName;
	public $authorUrl;
	public $providerIcon;
	public $providerName;
	public $providerUrl;
	public $type;
	public $image;
	public $width;
	public $height;
	public $aspectRatio;
}