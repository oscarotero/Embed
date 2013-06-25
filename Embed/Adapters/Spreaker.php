<?php
/**
 * Adapter to get the embed code from spreaker.com
 */
namespace Embed\Adapters;

use Embed\Viewers;

class Spreaker extends Webpage implements AdapterInterface {
	
	public function getCode () {
		$Dom = $this->Url->getHtmlContent();
		$id = 0;

		foreach ($Dom->getElementsByTagName('a') as $A) {
			if ($A->hasAttribute('data-episode_id')) {
				$id = (int)$A->getAttribute('data-episode_id');

				if ($id) {
					return Viewers::iframe('http://www.spreaker.com/embed/player/standard?autoplay=false&episode_id='.$id, '100%', 131, 'min-width:400px;');
				}
				break;
			}
		}
	}
}
