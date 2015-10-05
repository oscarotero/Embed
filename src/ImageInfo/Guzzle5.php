<?php

namespace Embed\ImageInfo;

use GuzzleHttp\Pool;

/**
 * Class to retrieve the size and mimetype of images using Guzzle5.
 */
class Guzzle5 implements ImageInfoInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getImagesInfo(array $urls, array $config = null)
    {
        if ($config === null || !isset($config['client']) || !($config['client'] instanceof \GuzzleHttp\Client)) {
            throw new \RuntimeException('Guzzle client not passed in config.');
        }

        $client = $config['client'];

        // Build parallel requests
        $requests = [];
        foreach ($urls as $url) {
            $requests[] = $client->createRequest('GET', $url['value']);
        }

        // Execute in parallel
        $responses = Pool::batch($client, $requests);

        // Build result set
        $result = [];
        foreach ($responses as $i => $response) {
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
