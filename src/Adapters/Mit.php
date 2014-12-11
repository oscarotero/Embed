<?php
/**
 * Adapter to fix some issues from mit.edu (not complete yet)
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Viewers;

class Mit extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'http://video.mit.edu/watch/*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $url = $this->getUrl();
        $url = preg_replace('|(/watch/[\w-]+)-([\d]+)|', '/embed/$2', $url);

        return Viewers::iframe($url, $this->getWidth(), $this->getHeight());
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {
        return 600;
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {
        return 337;
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderName()
    {
        return 'MIT Media Lab';
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'video';
    }
}
