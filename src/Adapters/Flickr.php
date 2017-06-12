<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter provider more information from flickr.
 */
class Flickr extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'www.flickr.com/photos/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $code = parent::getCode();

        if (empty($code)) {
            $this->width = 640;
            $this->height = 425;

            $code = Utils::iframe($this->getResponse()->getUrl()->withAddedPath('player'), $this->width, $this->height);
        }

        return $code;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Flickr';
    }
}
