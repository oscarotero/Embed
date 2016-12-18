<?php

namespace Embed\Http;

/**
 * Interface used to create http responses.
 */
interface DispatcherInterface
{
    /**
     * Dispatch an uri.
     *
     * @param Uri $uri
     *
     * @return Response
     */
    public function dispatch(Uri $uri);

    /**
     * Resolve multiple image uris at once.
     *
     * @param Uri[] $uris
     *
     * @return ImageResponse[]
     */
    public function dispatchImages(array $uris);
}
