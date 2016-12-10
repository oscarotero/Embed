<?php

namespace Embed\Http;

/**
 * Class to handle a request.
 */
class Request
{
    private $uri;
    private $response;
    private $dispatcher;

    /**
     * Constructor
     *
     * @param Uri|string $uri
     * @param DispatcherInterface|null $dispatcher
     */
    public function __construct($uri, DispatcherInterface $dispatcher = null)
    {
        if (!($uri instanceof Uri)) {
            $uri = new Uri($uri);
        }

        $this->uri = $uri;
        $this->dispatcher = $dispatcher ?: new CurlDispatcher();
    }

    /**
     * Returns the request's uri
     *
     * @return Uri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Returns the dispatcher
     *
     * @return DispatcherInterface
     */
    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     * Returns the request's response
     *
     * @return Response
     */
    public function getResponse()
    {
        if ($this->response === null) {
            $this->response = $this->dispatcher->dispatch($this);
        }

        return $this->response;
    }
}
