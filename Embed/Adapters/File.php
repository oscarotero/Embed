<?php
/**
 * Adapter to provide information from raw files
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Viewers;
use Embed\Providers\Html;
use Embed\Providers\OEmbed;
use Embed\Providers\OEmbedImplementations;
use Embed\Providers\OpenGraph;
use Embed\Providers\TwitterCards;

class File extends Adapter implements AdapterInterface {
	static private $contentTypes = array(
		'video/ogg' => array('video', 'videoHtml'),
		'video/ogv' => array('video', 'videoHtml'),
		'video/webm' => array('video', 'videoHtml'),
		'video/mp4' => array('video', 'videoHtml'),
		'audio/ogg' => array('audio', 'audioHtml'),
		'audio/mp3' => array('audio', 'audioHtml'),
		'audio/webm' => array('audio', 'audioHtml'),
		'image/jpeg' => array('video', 'imageHtml'),
		'image/gif' => array('video', 'imageHtml'),
		'image/png' => array('video', 'imageHtml'),
		'image/bmp' => array('video', 'imageHtml'),
		'image/ico' => array('video', 'imageHtml'),
		'text/rtf' => array('rich', 'google'),
		'application/pdf' => array('rich', 'google'),
		'application/msword' => array('rich', 'google'),
		'application/vnd.ms-powerpoint' => array('rich', 'google'),
		'application/vnd.ms-excel' => array('rich', 'google'),
		'application/zip' => array('rich', 'google'),
		'application/postscript' => array('rich', 'google'),
		'application/octet-stream' => array('rich', 'google')
	);

	static public function check (Url $Url) {
		return isset(static::$contentTypes[$Url->getContentType()]);
	}

	protected function initProviders (Url $Url) {
		$this->Url = $Url;
	}

	public function getTitle () {
		return $this->Url->getUrl();
	}

	public function getDescription () {
		return null;
	}

	public function getType () {
		return static::$contentTypes[$this->Url->getContentType()][0];
	}

	public function getCode () {
		switch (static::$contentTypes[$this->Url->getContentType()][1]) {
			case 'videoHtml':
				return Viewers::videoHtml($this->getImage(), $this->getUrl(), $this->getWidth(), $this->getHeight());

			case 'audioHtml':
				return Viewers::audioHtml($this->getUrl());

			case 'imageHtml':
				return Viewers::imageHtml($this->getUrl(), $this->getTitle(), $this->getWidth(), $this->getHeight());

			case 'google':
				return Viewers::google($this->getUrl());
		}
	}

	public function getAuthorName () {
		return null;
	}

	public function getAuthorUrl () {
		return null;
	}

	public function getImage () {
		return null;
	}

	public function getWidth () {
		return null;
	}

	public function getHeight () {
		return null;
	}
}
