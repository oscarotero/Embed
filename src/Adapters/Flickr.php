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
            'https://www.flickr.com/photos/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $code = parent::getCode();

        if (empty($code)) {
            $code = Utils::iframe($this->getResponse()->getUri()->withAddedPath('player'), $this->width, $this->height);
        }

        return $code;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        if (!parent::getCode()) {
            return 640;
        }

        return parent::getWidth();
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        if (!parent::getCode()) {
            return 425;
        }

        return parent::getHeight();
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Flickr';
    }
}
