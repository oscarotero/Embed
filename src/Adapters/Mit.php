<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;

/**
 * Adapter to fix some issues from mit.edu (not complete yet).
 */
class Mit extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'http://video.mit.edu/watch/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = $this->getUrl();
        $url = preg_replace('|(/watch/[\w-]+)-([\d]+)|', '/embed/$2', $url);

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
