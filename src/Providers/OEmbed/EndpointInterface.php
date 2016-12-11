<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\AdapterInterface;
use Embed\Http\Uri;

/**
 * Interface for all oembed endPoint.
 */
interface EndPointInterface
{
    /**
     * Check the response and create new instance.
     *
     * @param AdapterInterface $adapter
     *
     * @return OEmbedEndPointInterface|null
     */
    public static function create(AdapterInterface $adapter);

    /**
     * Returns the oembed endPoint.
     *
     * @return Uri|null
     */
    public function getEndPoint();
}
