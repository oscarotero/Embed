<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\AdapterInterface;
use Embed\Http\Uri;

/**
 * Interface for all oembed endpoint.
 */
interface EndpointInterface
{
    /**
     * Check the response and create new instance
     *
     * @param AdapterInterface $adapter
     *
     * @return OEmbedEndpointInterface|null
     */
    public static function create(AdapterInterface $adapter);

    /**
     * Returns the oembed endpoint
     *
     * @return Uri|null
     */
    public function getEndPoint();
}
