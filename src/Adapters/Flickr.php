<?php
/**
 * Adapter provider more information from flickr
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Request;
use Embed\Utils;

class Flickr extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
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
            $code = Utils::iframe($this->request->createUrl()->withAddedPath('player'), $this->width, $this->height);
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
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        if (!parent::getCode()) {
            return 425;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Flickr';
    }
}
