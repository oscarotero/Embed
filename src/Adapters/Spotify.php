<?php
/**
 * Adapter to get the embed code from spotify
 */
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;

class Spotify extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'http://open.spotify.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $uri = 'spotify'.str_replace('/', ':', $this->request->url->getPath(true));

        return Utils::iframe('https://embed.spotify.com/?uri='.$uri, 300, 380);
    }
}
