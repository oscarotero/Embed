<?php
namespace Embed;

class Url {
	private $info;
	private $url;

	public function __construct ($url) {
		$this->setUrl($url);
	}

	public function __toString () {
		return $this->getUrl();
	}

	public function setUrl ($url) {
		$this->info = parse_url($url);

		if (isset($this->info['query'])) {
			parse_str($this->info['query'], $this->info['query']);
		}

		if (isset($this->info['path'])) {
			$path = array();

			foreach (explode('/', $this->info['path']) as $dir) {
				if ($dir !== '') {
					$path[] = $dir;
				}
			}

			$this->info['path'] = $path;
		}

		$this->buildUrl();
	}

	public function getUrl () {
		return $this->url;
	}

	public function match ($pattern) {
		if (is_array($pattern)) {
			foreach ($pattern as $p) {
				if ($this->match($p) === true) {
					return true;
				}
			}

			return false;
		}

		$pattern = str_replace(array('\\*', '\\?'), array('.+', '?'), preg_quote($pattern, '|'));

		return (preg_match('|^'.$pattern.'$|i', $this->url) === 1) ? true : false;
	}

	public function getScheme () {
		return isset($this->info['scheme']) ? $this->info['scheme'] : null;
	}

	public function setScheme ($scheme) {
		$this->info['scheme'] = $scheme;
		$this->buildUrl();
	}

	public function getHost () {
		return isset($this->info['host']) ? $this->info['host'] : null;
	}

	public function setHost ($host) {
		$this->info['host'] = $host;
		$this->buildUrl();
	}

	public function getPath ($key = 0) {
		return isset($this->info['path'][$key]) ? $this->info['path'][$key] : null;
	}

	public function hasPath ($key, $value = null) {
		if (!isset($this->info['path'][$key])) {
			return false;
		}

		if (isset($value)) {
			return ($this->info['path'][$key] === $value) ? true : false;
		}

		return true;
	}

	public function splicePath ($offset, $length = null) {
		if (isset($length)) {
			array_splice($this->info['path'], $offset, $length);
		} else {
			array_splice($this->info['path'], $offset);
		}

		$this->buildUrl();
	}

	public function hasParameter ($name) {
		return isset($this->info['query'][$name]);
	}

	public function getParameter ($name) {
		return isset($this->info['query'][$name]) ? $this->info['query'][$name] : null;
	}

	public function setParameter ($name, $value) {
		$this->info['query'][$name] = $value;
		$this->buildUrl();
	}

	public function getFragment () {
		return isset($this->info['fragment']) ? $this->info['fragment'] : null;
	}

	private function buildUrl () {
		$url = '';

		if (isset($this->info['scheme'])) {
			$url .= $this->info['scheme'].'://';
		}
		if (isset($this->info['host'])) {
			$url .= $this->info['host'];
		}
		if (isset($this->info['path'])) {
			$url .= '/'.implode('/', $this->info['path']);
		}
		if (isset($this->info['query'])) {
			$url .= '?'.http_build_query($this->info['query']);
		}
		if (isset($this->info['fragment'])) {
			$url .= '#'.$this->info['fragment'];
		}

		$this->url = $url;
	}
}
?>