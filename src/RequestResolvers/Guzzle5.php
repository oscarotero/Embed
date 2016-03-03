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
     * @var \GuzzleHttp\Response|false
     */
    protected $response;

    protected $error;

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
     * {@inheritdoc}
     */
    public function getHttpCode()
    {
        $response = $this->getResponse();

        return $response ? $response->getStatusCode() : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getMimeType()
    {
        $response = $this->getResponse();

        return $response ? $response->getHeader('Content-Type') : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        $response = $this->getResponse();

        return $response->getHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        $response = $this->getResponse();

        return $response ? $response->getBody()->getContents() : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        $response = $this->getResponse();

        return $response ? $response->getEffectiveUrl() : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestInfo()
    {
        return $this->request->getConfig();
    }

    /**
     * {@inheritdoc}
     */
    protected function getResponse()
    {
        if ($this->response === null) {
            try {
                $this->response = $this->client->send($this->request);
            } catch (\Exception $exception) {
                $this->error = $exception->getMessage();
                $this->response = false;
            }
        }

        return $this->response;
    }
}
