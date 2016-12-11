<?php

namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;

/**
 * Adapter to get the embed code from line.do.
 */
class Line extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->getResponse()->getUri()->match([
            'https://line.do/*',
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
