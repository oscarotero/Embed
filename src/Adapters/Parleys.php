<?php

namespace Embed\Adapters;

use Embed\Request;

/**
 * Adapter to get more info from parleys.com.
 */
class Parleys extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            '*://www.parleys.com/play/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $id = $this->request->getDirectoryPosition(1);

        return '<div data-parleys-presentation="'.$id.'" style="width:'.$this->width.';height:'.$this->height.'px"><script type = "text/javascript" src="//parleys.com/js/parleys-share.js"></script></div>';
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return '100%';
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 300;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'video';
    }
}
