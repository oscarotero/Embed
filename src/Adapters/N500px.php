<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;

/**
 * Adapter get embed code from 500px.com.
 */
class N500px extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->getResponse()->getUri()->match([
            'https?://500px.com/photo/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $uri = $this->getResponse()->getUri();

        if (is_numeric($uri->getDirectoryPosition(1))) {
            return Utils::iframe($uri->withDirectoryPosition(2, 'embed.html'), $this->width, $this->height);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        if (is_numeric($this->getResponse()->getUri()->getDirectoryPosition(1))) {
            return $this->imageWidth;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        if (is_numeric($this->getResponse()->getUri()->getDirectoryPosition(1))) {
            return $this->imageHeight;
        }
    }
}
