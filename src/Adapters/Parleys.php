<?php
/**
 * Adapter to get more info from parleys.com
 */
namespace Embed\Adapters;

use Embed\Request;

class Parleys extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            '*://www.parleys.com/play/*'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $id = $this->request->url->getDirectory(1);

        return '<div data-parleys-presentation="'.$id.'" style="width:100%;height:300px"><script type = "text/javascript" src="//parleys.com/js/parleys-share.js"></script></div>';
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'video';
    }
}
