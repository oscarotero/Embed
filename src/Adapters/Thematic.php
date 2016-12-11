<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Utils;

/**
 * Adapter to provide information from thematic.
 */
class Thematic extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
            'https?://www.thematic.co/stories/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return Utils::iframe($this->getResponse()->getUri()->withDirectoryPosition(0, 'embed'), $this->width, $this->height);
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
        return 300;
    }
}
