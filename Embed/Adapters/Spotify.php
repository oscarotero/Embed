<?php
/**
 * Adapter to fix some issues from jsfiddle
 */
namespace Embed\Adapters;

use Embed\Viewers;
use Embed\Url;

class Spotify extends Webpage implements AdapterInterface
{
	public static function check(Url $Url)
    {
        return $Url->match(array(
            'http://open.spotify.com/*'
        ));
    }

    public function getCode()
    {
        $uri = 'spotify'.str_replace('/', ':', $this->Url->getPath(true));

        return Viewers::iframe('https://embed.spotify.com/?uri='.$uri, 300, 380);
    }
}
