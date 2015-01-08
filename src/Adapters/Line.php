<?php
/**
 * Adapter to get the embed code from line.do
 */
namespace Embed\Adapters;

use Embed\Viewers;
use Embed\Request;

class Line extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'https://line.do/*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $url = clone $this->request->url;

        $url->setDirectory(0, 'embed');
        $url->setDirectory(2, 'vertical');

        return Viewers::iframe($url->getUrl(), $this->width, $this->height);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {
        return 640;
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {
        return 640;
    }
}
