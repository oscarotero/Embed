<?php

namespace Embed\Exceptions;

use Embed\Http\Response;

class InvalidUrlException extends EmbedException
{
    /**
     * @var Response|null
     */
    private $response;

    /**
     * Set the response related with this error
     *
     * @param Response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * Get the response related with this error
     *
     * @return Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}
