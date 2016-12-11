<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Providers;

/**
 * Adapter to provide information from youtube.
 * Required when youtube returns a 429 status code.
 */
class Youtube extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid([200, 429]) && $request->getResponse()->getUri()->match([
            'https?://*.youtube.*',
        ]);
    }
}
