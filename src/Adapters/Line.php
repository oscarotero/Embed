<?php

namespace Embed\Adapters;

use Embed\Utils;
use Embed\Http\Response;

/**
 * Adapter to get the embed code from line.do.
 */
class Line extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUri()->match([
            'line.do/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $uri = $this->getResponse()->getUri();
        $id = $uri->getDirectoryPosition(2);

        return Utils::iframe($uri->withPath("embed/{$id}/vertical"), $this->width, $this->height, 'border:1px solid #e7e7e7;');
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return 640;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 640;
    }
}
