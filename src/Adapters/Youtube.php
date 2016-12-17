<?php

namespace Embed\Adapters;

use Embed\Http\Request;

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
        $response = $request->getResponse();

        return $response->isValid([200, 429]) && $response->getUri()->match([
            '*.youtube.*',
        ]);
    }
}
