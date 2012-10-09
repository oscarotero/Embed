<?php
namespace Embed\Services;

use Embed\Url;
use Embed\Providers\Provider;

abstract class Service {
	protected $Provider;

	public function __construct (Provider $Provider) {
		$this->Provider = $Provider;

		//Clear extra code
		$html = $Provider->getParameter('html');

		if (isset($html)) {
			if (strpos($html, '</iframe>') !== false) {
				$html = preg_replace('|^.*(<iframe.*</iframe>).*$|', '$1', $html);
			} else if (strpos($html, '</object>') !== false) {
				$html = preg_replace('|^.*(<object.*</object>).*$|', '$1', $html);
			} else if (strpos($html, '</embed>') !== false) {
				$html = preg_replace('|^.*(<embed.*</embed>).*$|', '$1', $html);
			}

			$Provider->setParameter('html', $html);
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

		if (!is_file($directory.$file) || $replace === true) {
			if (!is_dir($directory)) {
				mkdir($directory, 0777, true);
			}

			file_put_contents($directory.$file, file_get_contents('http://icons.duckduckgo.com/i/'.$file));
		}

		$this->Provider->setParameter('icon', $file);

		return $file;
	}

	public function getIcon () {
		return $this->Provider->getParameter('icon');
	}

	//Dimensions

	public function getWidth () {
		return $this->Provider->getParameter('width');
	}

	public function getHeight () {
		return $this->Provider->getParameter('height');
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
		return $this->Provider->getParameter('title');
	}

	public function getDescription () {
		return $this->Provider->getParameter('description');
	}

	public function getImage () {
		if ($this->getType() === 'photo') {
			return $this->Provider->getParameter('url') ?: $this->Provider->getParameter('thumbnail_url');
		}

		return $this->Provider->getParameter('thumbnail_url');
	}

	public function getEmbedCode () {
		return $this->Provider->getParameter('html');
	}

	public function getUrl () {
		return $this->Provider->getUrl();
	}

	public function getType () {
		return $this->Provider->getParameter('type');
	}

	public function getAuthorName () {
		return $this->Provider->getParameter('author_name');
	}

	public function getAuthorUrl () {
		return $this->Provider->getParameter('author_url');
	}

	public function getProviderName () {
		return $this->Provider->getParameter('provider_name');
	}

	public function getProviderUrl () {
		return $this->Provider->getParameter('provider_url');
	}
}