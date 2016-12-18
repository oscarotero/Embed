<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\Adapter;
use Embed\Http\Url;

/**
 * Interface for all oembed endPoint.
 */
interface EndPointInterface
{
    /**
     * Check the response and create new instance.
     *
     * @param Adapter $adapter
     *
     * @return EndPointInterface|null
     */
    public static function create(Adapter $adapter);

    /**
     * Returns the oembed endPoint.
     *
     * @return Url|null
     */
    public function getEndPoint();
}
