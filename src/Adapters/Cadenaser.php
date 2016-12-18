<?php

namespace Embed\Adapters;

use Embed\Utils;
use Embed\Http\Response;

/**
 * Adapter to get the embed code from play.cadenaser.com.
 */
class Cadenaser extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'play.cadenaser.com/audio/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = $this->getResponse()->getUrl();

        return Utils::iframe($url->withPath('/widget/'.$url->getPath()), $this->width, $this->height);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return 620;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 100;
    }
}
