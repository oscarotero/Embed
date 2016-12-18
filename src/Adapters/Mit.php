<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter to fix some issues from mit.edu (not complete yet).
 */
class Mit extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'video.mit.edu/watch/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = preg_replace('|(/watch/[\w-]+)-([\d]+)|', '/embed/$2', $this->url);

        return Utils::iframe($url, $this->width, $this->height);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return 600;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 337;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'MIT Media Lab';
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'video';
    }
}
