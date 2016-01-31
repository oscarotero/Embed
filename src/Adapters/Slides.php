<?php

namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;

/**
 * Adapter to get the embed code from slides.com.
 */
class Slides extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https?://slides.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return Utils::iframe($this->request->getUrl().'/embed', $this->width, $this->height);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return 576;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 420;
    }
}
