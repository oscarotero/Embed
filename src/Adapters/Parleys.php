<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to get more info from parleys.com.
 */
class Parleys extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'www.parleys.com/play/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $id = $this->getResponse()->getUrl()->getDirectoryPosition(1);

        return '<div data-parleys-presentation="'.$id.'" style="width:'.$this->width.';height:'.$this->height.'px"><script type = "text/javascript" src="//parleys.com/js/parleys-share.js"></script></div>';
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return '100%';
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 300;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'video';
    }
}
