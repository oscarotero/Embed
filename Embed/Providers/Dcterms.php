<?php
/**
 * Generic Dublin Core provider.
 * Load the Dublin Core data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;

class Dcterms extends Provider {
	public function __construct (Url $Url) {
		if (!($Html = $Url->getHtmlContent())) {
			return false;
		}

		foreach ($Html->getElementsByTagName('meta') as $Tag) {
			if ($Tag->hasAttribute('name') && (stripos($Tag->getAttribute('name'), 'dc.') === 0)) {
				$this->set(strtolower(substr($Tag->getAttribute('name'), 3)), $Tag->getAttribute('content'));
			}
		}
	}

	public function getTitle () {
		return $this->get('title');
	}

	public function getDescription () {
		return $this->get('description');
	}

	public function getAuthorName () {
		return $this->get('author');
	}
}
?>
