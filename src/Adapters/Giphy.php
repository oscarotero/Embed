<?php
/**
 * Adapter to get the embed code from giphy.com
 */
namespace Embed\Adapters;

use Embed\Viewers;
use Embed\Request;

class Giphy extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'https?://giphy.com/gifs/*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        if (($url = $this->providers['TwitterCards']->get('player'))) {
            $url = str_replace('/twitter/iframe', '?html5=true', $url);

            return Viewers::iframe($url, $this->width.'px', $this->height.'px');
        }
    }
}
