<?php
/**
 * Adapter to get the embed code from spotify
 */
namespace Embed\Adapters;

use Embed\Viewers;
use Embed\Request;

class Spotify extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'http://open.spotify.com/*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $uri = 'spotify'.str_replace('/', ':', $this->request->url->getPath(true));

        return Viewers::iframe('https://embed.spotify.com/?uri='.$uri, 300, 380);
    }
}
