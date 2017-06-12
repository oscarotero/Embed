<?php

namespace Embed\Http;

/**
 * Interface used to create http responses.
 */
interface DispatcherInterface
{
    /**
     * Dispatch an url.
     *
     * @param Url $url
     *
     * @return Response
     */
    public function dispatch(Url $url);

    /**
     * Resolve multiple image urls at once.
     *
     * @param Url[] $urls
     *
     * @return ImageResponse[]
     */
    public function dispatchImages(array $urls);
}
