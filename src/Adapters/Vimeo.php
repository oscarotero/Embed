<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to provide information from Vimeo.
 * Required when Vimeo returns a 403 status code.
 */
class Vimeo extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid([200, 403]) && $response->getUrl()->match([
            'vimeo.com/*',
        ]);
    }
}
