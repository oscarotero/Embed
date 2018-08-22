<?php

namespace Embed\Http;

/**
 * Class to consume http responses.
 */
class ImageResponse extends AbstractResponse
{
    protected $size;

    /**
     * Create a ImageResponse using a bas64 url.
     *
     * @param Url $url
     *
     * @return static|null
     */
    public static function createFromBase64(Url $url)
    {
        $pieces = explode(';', $url->getContent(), 2);

        if ((count($pieces) !== 2) || (strpos($pieces[0], 'image/') === false) || (strpos($pieces[1], 'base64,') !== 0)) {
            return false;
        }

        if (($info = @getimagesizefromstring(base64_decode(substr($pieces[1], 7)))) !== false) {
            return new self(
                $url,
                $url,
                200,
                $info['mime'],
                [$info[0], $info[1]],
                [],
                []
            );
        }
    }

    public function __construct(Url $startingUrl, Url $url, $statusCode, $contentType, $size, array $headers, array $info)
    {
        parent::__construct($startingUrl, $url, $statusCode, $contentType, $headers, $info);
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
