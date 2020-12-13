<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to provide information from Instagram.
 * Required when Instagram returns a 429 status code.
 */
class Instagram extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid([200, 429]);
    }
}
