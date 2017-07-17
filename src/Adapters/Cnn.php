<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Http\Url;
use Embed\Utils;

/**
 * Adapter provider more information from cnn.com.
 */
class Cnn extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            '*.cnn.com/videos/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = Url::create('https://fave.api.cnn.io/v1/fav/')
            ->withQueryParameters([
                'video' => implode('/', $this->getResponse()->getUrl()->getSlicePath(1)),
                'customer' => 'cnn',
                'env' => 'prod'
            ]);

        $this->width = 416;
        $this->height = 234;

        return Utils::iframe($url, $this->width, $this->height);
    }
}
