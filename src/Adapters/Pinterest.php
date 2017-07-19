<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to get embed code from pinterest.com.
 */
class Pinterest extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'www.pinterest.com/pin/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return '<a data-pin-do="embedPin" data-pin-lang="es" href="'
            .$this->getResponse()->getUrl()
            .'"></a>'
            .'<script async defer src="//assets.pinterest.com/js/pinit.js"></script>';
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return 236;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 442;
    }
}
