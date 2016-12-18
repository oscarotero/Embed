<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter get embed code from 500px.com.
 */
class N500px extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            '500px.com/photo/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = $this->getResponse()->getUrl();

        if (is_numeric($url->getDirectoryPosition(1))) {
            return Utils::iframe($url->withDirectoryPosition(2, 'embed.html'), $this->width, $this->height);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        if (is_numeric($this->getResponse()->getUrl()->getDirectoryPosition(1))) {
            return $this->imageWidth;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        if (is_numeric($this->getResponse()->getUrl()->getDirectoryPosition(1))) {
            return $this->imageHeight;
        }
    }
}
