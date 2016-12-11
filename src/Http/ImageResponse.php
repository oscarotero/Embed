<?php

namespace Embed\Http;

use Embed\Exceptions\EmbedException;
use Embed\Http\Uri;
use Exception;
use DOMDocument;
use SimpleXMLElement;

/**
 * Class to consume http responses.
 */
class ImageResponse extends AbstractResponse
{
    protected $size;

    /**
     * Create a ImageResponse using a bas64 url
     *
     * @param Uri $uri
     *
     * @return static|null
     */
    public static function createFromBase64(Uri $uri)
    {
        $pieces = explode(';', $uri->getContent(), 2);

        if ((count($pieces) !== 2) || (strpos($pieces[0], 'image/') === false) || (strpos($pieces[1], 'base64,') !== 0)) {
            return false;
        }

        if (($info = getimagesizefromstring(base64_decode(substr($pieces[1], 7)))) !== false) {
            return new ImageResponse(
                $uri,
                200,
                $info['mime'],
                [$info[0], $info[1]],
                []
            );
        }
    }

    public function __construct(Uri $uri, $statusCode, $contentType, $size, array $headers)
    {
        parent::__construct($uri, $statusCode, $contentType, $headers);
        $this->size = $size;
    }

    /**
     * Get the image width.
     *
     * @return int
     */
    public function getWidth()
    {
        return (int) $this->size[0];
    }

    /**
     * Get the image height.
     *
     * @return int
     */
    public function getHeight()
    {
        return (int) $this->size[1];
    }
}
