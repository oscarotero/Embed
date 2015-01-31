<?php
/**
 * Adapter to get the embed code from giphy.com
 */
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;

class Giphy extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https?://giphy.com/gifs/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        if (($url = $this->providers['twittercards']->bag->get('player'))) {
            $url = str_replace('/twitter/iframe', '?html5=true', $url);

            return Utils::iframe($url, $this->width.'px', $this->height.'px');
        }
    }
}
