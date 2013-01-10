<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Json;

class Archive extends Generic {
	static public $settings = array(
		'patterns' => array(
			'http://archive.org/details/*',
		)
	);

	public function __construct (Url $Url) {
		$UrlApi = clone $Url;
		$UrlApi->setParameter('output', 'json');

		$this->Api = new Json($UrlApi);

		parent::__construct($Url);
	}

	protected function setData () {
		parent::setData();

		if (($metadata = $this->Api->get('metadata')) === null) {
			return;
		}

		$this->title = $metadata['title'][0];
		$this->description = $metadata['description'][0];
		$this->authorName = $metadata['creator'][0];

		if ($metadata['mediatype'][0] !== 'movies') {
			return;
		}

		$mp4 = $ogg = $poster = null;

		foreach ($this->Api->get('files') as $name => $data) {
			if ($data['format'] === 'Ogg Video') {
				$ogg = 'http://archive.org/download/'.$metadata['identifier'][0].'/'.$name;
				continue;
			}

			if ($data['format'] === '512Kb MPEG4') {
				$mp4 = 'http://archive.org/download/'.$metadata['identifier'][0].'/'.$name;
				continue;
			}

			if ($data['format'] === 'Thumbnail') {
				$poster = 'http://archive.org/download/'.$metadata['identifier'][0].'/'.$name;

				if (($imgDimmensions = @getimagesize($poster))) {
					$this->image = $poster;
					$this->width = $imgDimmensions[0];
					$this->height = $imgDimmensions[1];
					$this->aspectRatio = round(($this->height / $this->width) * 100, 3);
				}

				break;
			}
		}

		$this->setVideoCode($poster, $ogg, $mp4);
	}
}
