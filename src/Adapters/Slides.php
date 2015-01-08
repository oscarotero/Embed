<?php
/**
 * Adapter to get the embed code from slides.com
 */
namespace Embed\Adapters;

use Embed\Viewers;
use Embed\Request;

class Slides extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'https?://slides.com/*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return Viewers::iframe($this->request->url->getUrl().'/embed', $this->width, $this->height);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {
        return 576;
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {
        return 420;
    }
}
