<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter to get the embed code from cartodb.
 */
class Carto extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
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

        $url = $this->getResponse()->getUrl()->withDirectoryPosition(2, 'embed_map');

        return Utils::iframe($url, '100%', $this->height);
    }
}
