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

	//Utils

	protected function setFlashCode ($href) {
		$this->code = '<object width="'.$this->width.'" height="'.$this->height.'" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,47,0"><param name="movie" value="'.$href.'" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><embed src="'.$href.'" width="'.$this->width.'" height="'.$this->height.'" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object>';
	}

	protected function setIframeCode ($href) {
		$this->code = '<iframe src="'.$href.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$this->width.'px; height:'.$this->height.'px;" allowTransparency="true"></iframe>';
	}

	protected function setVideoCode ($poster, $ogg, $mp4) {
		$this->code = '<video poster="'.$poster.'" width="'.$this->width.'" height="'.$this->height.'" controls>'
					.'<source src="'.$ogg.'">'
					.'<source src="'.$mp4.'">'
					.'</video>';
	}
}