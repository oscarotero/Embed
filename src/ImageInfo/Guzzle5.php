<?php

namespace Embed\ImageInfo;

use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use GuzzleHttp\Exception\RequestException;

/**
 * Class to retrieve the size and mimetype of images using Guzzle5.
 */
class Guzzle5 implements ImageInfoInterface
{
    use UtilsTrait;

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

        $result = [];

        // Build parallel requests
        $requests = [];
        foreach ($urls as $k => $url) {
            if (strpos($url['value'], 'data:') === 0) {
                if ($info = static::getEmbeddedImageInfo($url['value'])) {
                    $result[$k] = array_merge($url, $info);
                }
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

            if (($size = getimagesizefromstring($response->getBody())) !== false) {
                $result[$k] = [
                    'width' => $size[0],
                    'height' => $size[1],
                    'size' => $size[0] * $size[1],
                    'mime' => $size['mime'],
                ] + $urls[$k];
            }
        }

        ksort($result, SORT_NUMERIC);

        return $result;
    }
}
