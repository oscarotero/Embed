<?php

namespace Embed\ImageInfo;

use GuzzleHttp\Pool;
use GuzzleHttp\Exception\RequestException;

/**
 * Class to retrieve the size and mimetype of images using Guzzle5.
 */
class Guzzle5 implements ImageInfoInterface
{
    use UtilsTrait;

    /**
     * {@inheritdoc}
     */
    public static function getImagesInfo(array $urls, array $config = null)
    {
        if ($config === null || !isset($config['client']) || !($config['client'] instanceof \GuzzleHttp\Client)) {
            throw new \RuntimeException('Guzzle client not passed in config.');
        }

        $client = $config['client'];
        $result = [];

        // Build parallel requests
        $requests = [];
        foreach ($urls as $url) {
            if (strpos($url['value'], 'data:') === 0) {
                if ($info = static::getEmbeddedImageInfo($url['value'])) {
                    $result[] = array_merge($url, $info);
                }
                continue;
            }

            $requests[] = $client->createRequest('GET', $url['value']);
        }

        // Execute in parallel
        $responses = Pool::batch($client, $requests);

        // Build result set
        foreach ($responses as $i => $response) {
            if ($response instanceof RequestException) {
                continue;
            }

            if (($size = @getimagesizefromstring($response->getBody())) !== false) {
                $result[] = [
                    'width' => $size[0],
                    'height' => $size[1],
                    'size' => $size[0] * $size[1],
                    'mime' => $size['mime'],
                ] + $urls[$i];
            }
        }

        return $result;
    }
}
