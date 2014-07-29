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
            'https?://giphy.com/gifs/*'
        ));
    }


    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        if (($id = $this->request->getDirectory(1))) {
            return Viewers::iframe('//giphy.com/embed/'.$id, $this->width.'px', $this->height.'px');
        }
    }
}
