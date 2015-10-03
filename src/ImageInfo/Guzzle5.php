<?php
namespace Embed\ImageInfo;

use Embed\ImageInfo\ImageInfoInterface;

 /**
  * Class to retrieve the size and mimetype of images using Guzzle5
  */
class Guzzle5 implements ImageInfoInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getImagesInfo(array $urls, array $config = null)
    {
        if ($config === null || !isset($config['client']) || !($config['client'] instanceof \GuzzleHttp\Client)) {
            throw new RuntimeException('Guzzle client not passed in config.');
        }

        $client = $config['client'];
        $result = [ ];

        foreach ($urls as $url) {
            $response = $client->get($url['value']);

            if (($size = @getimagesizefromstring($response->getBody())) !== false) {
                $result[] = [
                    'width' => $size[0],
                    'height' => $size[1],
                    'size' => $size[0] * $size[1],
                    'mime' => $response->getHeader('Content-Type'),
                ] + $url;
            }
        }

        return $result;
    }
}
