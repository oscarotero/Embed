<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Provider;

abstract class Service {
	protected $Provider;

	private static function saveFile ($url, $directory, $file, $replace) {
		if (!is_file($directory.$file) || $replace === true) {
			if (!is_dir($directory)) {
				mkdir($directory, 0777, true);
			}

			return (file_put_contents($directory.$file, file_get_contents($url)) === false) ? false : $file;
		}

		return $file;
	}

	public function __construct (Provider $Provider) {
		$this->Provider = $Provider;

		//Clear extra code
		$html = $Provider->get('html');

		if (isset($html)) {
			if (strpos($html, '</iframe>') !== false) {
				$html = preg_replace('|^.*(<iframe.*</iframe>).*$|', '$1', $html);
			} else if (strpos($html, '</object>') !== false) {
				$html = preg_replace('|^.*(<object.*</object>).*$|', '$1', $html);
			} else if (strpos($html, '</embed>') !== false) {
				$html = preg_replace('|^.*(<embed.*</embed>).*$|', '$1', $html);
			}

			$Provider->set('html', $html);
		}
	}

	public function hasData () {
		return $this->Provider->isEmpty() ? false : true;
	}

	public function getProvider () {
		return $this->Provider;
	}

	public function __toString () {
		return $this->getEmbedCode();
	}

	//Icon

	public function saveIcon ($directory, $replace = false) {
		$file = parse_url($this->getUrl(), PHP_URL_HOST).'.ico';
		$file = self::saveFile("http://icons.duckduckgo.com/i/$file", $directory, $file, $replace);

		if ($file !== false) {
			$this->Provider->set('icon', $file);

			return true;
		}

		return false;
	}

	public function getIcon () {
		return $this->Provider->get('icon');
	}

	//Dimensions

	public function getWidth () {
		return $this->Provider->get('width');
	}

	public function getHeight () {
		return $this->Provider->get('height');
	}

	public function getAspectRatio () {
		if (!($width = $this->getWidth()) || !($height = $this->getHeight())) {
			return 0;
		}

		if ((strpos($height, '%') === false) && (strpos($width, '%') === false)) {
			return ($height / $width) * 100;
		}

		return 0;
	}

	//Content info

	public function getTitle () {
		return $this->Provider->get('title');
	}

	public function getDescription () {
		return $this->Provider->get('description');
	}

	public function saveImage ($directory, $replace = false) {
		if (($image = $this->getImage())) {
			$file = base64_encode($image);

			try {
				$info = getimagesize($image);
			} catch (\Exception $Exception) {
				return false;
			}

			switch ($info[2]) {
				case IMAGETYPE_GIF:
					$file .= '.gif';
					break;

				case IMAGETYPE_JPEG:
					$file .= '.jpg';
					break;

				case IMAGETYPE_PNG:
					$file .= '.png';
					break;

				case IMAGETYPE_ICO:
					$file .= '.ico';
					break;
			}

			$file = self::saveFile($image, $directory, $file, $replace);

			if ($file !== false) {
				$this->Provider->set('image', $file);

				return true;
			}
		}

		return false;
	}

	public function getImage () {
		if ($this->Provider->has('image')) {
			return $this->Provider->get('image');
		}

		if ($this->getType() === 'photo') {
			return $this->Provider->get('url') ?: $this->Provider->get('thumbnail_url');
		}

		return $this->Provider->get('thumbnail_url');
	}

	public function getEmbedCode () {
		return $this->Provider->get('html');
	}

	public function getUrl () {
		return $this->Provider->getUrl();
	}

	public function getType () {
		return $this->Provider->get('type');
	}

	public function getAuthorName () {
		return $this->Provider->get('author_name');
	}

	public function getAuthorUrl () {
		return $this->Provider->get('author_url');
	}

	public function getProviderName () {
		return $this->Provider->get('provider_name');
	}

	public function getProviderUrl () {
		return $this->Provider->get('provider_url');
	}
}