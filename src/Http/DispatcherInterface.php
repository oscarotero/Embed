<?php

namespace Embed\Http;

/**
 * Interface used to create http responses with requests.
 */
interface DispatcherInterface
{
    /**
     * Execute a request.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function dispatch(Request $request);

    /**
     * Resolve multiple requests at once.
     *
     * @param string[] $urls   The request's urls
     * @param array    $config The request's configuration
     *
     * @return static[]
     */
    //public static function dispatchMultiple(array $urls, array $config);
}
