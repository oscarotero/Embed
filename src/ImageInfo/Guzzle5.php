<?php

namespace Embed\ImageInfo;

use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Message\Response;

/**
 * Class to retrieve the size and mimetype of images using Guzzle5.
 */
class Guzzle5 implements ImageInfoInterface, ImagesInfoInterface
{
    protected $response;

    protected static $config = [
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
     * {@inheritdoc}
     */
    public static function getImagesInfo(array $urls, array $config = null)
    {
        $client = isset($config['client']) ? $config['client'] : new Client([
            'defaults' => static::$config,
        ]);

        $requests = [];
        $result = [];

        // Build parallel requests
        $requests = [];
        foreach ($urls as $k => $url) {
            if (strpos($url['value'], 'data:') === 0) {
                $result[$k] = new EmbeddedImage($url['value']);
                continue;
            }

            $requests[$k] = $client->createRequest('GET', $url['value']);
        }

        // Execute in parallel
        $responses = Pool::batch($client, $requests);

        // Build result set
        foreach ($responses as $k => $response) {
            if ($response instanceof RequestException) {
                continue;
            }

            $result[$k] = new static($response);
        }

        return $result;
    }

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        $this->response->getHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        $this->response->getEffectiveUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo()
    {
        if (($size = getimagesizefromstring($this->response->getBody())) !== false) {
            return [
                'width' => $size[0],
                'height' => $size[1],
                'size' => $size[0] * $size[1],
                'mime' => $size['mime'],
            ];
        }

        return false;
    }
}
