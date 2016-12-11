<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Utils;

/**
 * Adapter to get the embed code from cartodb.
 */
class Carto extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
            '*.carto.com/viz/*/public_map',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = 520;

        $url = $this->getResponse()->getUri()->withDirectoryPosition(2, 'embed_map');

        return Utils::iframe($url, '100%', $this->height);
    }
}
