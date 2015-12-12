<?php

namespace Embed\RequestResolvers;

use GuzzleHttp\Client;

class Guzzle5 implements RequestResolverInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var \GuzzleHttp\Request
     */
    protected $request;

    /**
     * @var \GuzzleHttp\Response
     */
    protected $response;

    protected $defaultConfig = [
        'verify' => false,
        'timeout' => 10,
        'connect_timeout' => 20,
        'headers' => [
            'User-Agent' => 'Embed PHP Library',
        ],
        'allow_redirects' => [
            'max' => 20,
            'referer' => true,
        ],
    ];

    /**
     * Constructor. Sets the url.
     *
     * @param string $url    The url value
     * @param array  $config The resolver configuration
     */
    public function __construct($url, array $config)
    {
        $this->client = isset($config['client']) ? $config['client'] : new Client([
            'defaults' => $this->defaultConfig,
        ]);

        $this->request = $this->client->createRequest('GET', $url);
    }

    /**
     * Get the http code of the url, for example: 200.
     *
     * @return int The http code
     */
    public function getHttpCode()
    {
        return $this->getResponse()->getStatusCode();
    }

    /**
     * Get the content-type of the url, for example: text/html.
     *
     * @return string The content-type header or null
     */
    public function getMimeType()
    {
        return $this->getResponse()->getHeader('Content-Type');
    }

    /**
     * Get the content of the url.
     *
     * @return string The content or false
     */
    public function getContent()
    {
        return $this->getResponse()->getBody()->getContents();
    }

    /**
     * Return the final url (after all possible redirects).
     *
     * @return string The final url
     */
    public function getUrl()
    {
        return $this->getResponse()->getEffectiveUrl();
    }

    /**
     * Return the http request info (for debug purposes).
     *
     * @return array
     */
    public function getRequestInfo()
    {
        return $this->request->getConfig();
    }

    /**
     * Get the result of the http request.
     *
     * @return Response
     */
    protected function getResponse()
    {
        if ($this->response === null) {
            $this->response = $this->client->send($this->request);
        }

        return $this->response;
    }
}
