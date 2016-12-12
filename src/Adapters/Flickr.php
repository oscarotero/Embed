<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Utils;

/**
 * Adapter provider more information from flickr.
 */
class Flickr extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
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

            $code = Utils::iframe($this->getResponse()->getUri()->withAddedPath('player'), $this->width, $this->height);
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
