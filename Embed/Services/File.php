<?php
namespace Embed\Services;

use Embed\Url;

class File extends Service {
	static private $validTypes = array(
		'text/rtf' => 'RTF',
		'application/pdf' => 'PDF',
		'application/msword' => 'MS Word',
		'application/vnd.ms-powerpoint' => 'MS Powerpoint',
		'application/vnd.ms-excel' => 'MS Excel'
	);

	static public function check (Url $Url) {
		echo $Url->getContentType();
		return isset(static::$validTypes[$Url->getContentType()]) ? $Url : false;
	}

	public function __construct (Url $Url) {
		$this->Url = $Url;

		$this->setData();
	}

	protected function setData () {
		$this->title = static::$validTypes[$this->Url->getContentType()];
		$this->url = $this->Url->getUrl();
		$this->type = 'file';

		$urlBase = $this->Url->getScheme().'://'.$this->Url->getHost();

		$this->providerName = $this->Url->getHost();
		$this->providerUrl = $urlBase;

		if (($ch = curl_init($urlBase.'/favicon.ico')) !== false) {
			$this->providerIcon = $urlBase.'/favicon.ico';
			curl_close($ch);
		}

		$this->width = 500;
		$this->height = 500;

		$href = 'http://docs.google.com/viewer?'.http_build_query(array(
			'url' => $this->Url->getUrl(),
			'embedded' => 'true'
		));

		$this->code = '<iframe src="'.$href.'" frameborder="0" style="border:none; overflow:hidden; width:'.$this->width.'px; height:'.$this->height.'px;" allowTransparency="true"></iframe>';
	}
}
