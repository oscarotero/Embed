<?php

namespace Embed\ImageInfo;

/**
 * Class to retrieve the size and mimetype of embedded images.
 */
class EmbeddedImage implements ImageInfoInterface
{
    private $url;

    /**
     * @param string $url The image url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo()
    {
        $pieces = explode(';', $this->url, 2);

        if ((count($pieces) !== 2) || (strpos($pieces[0], 'image/') === false) || (strpos($pieces[1], 'base64,') !== 0)) {
            return false;
        }

        if (($info = getimagesizefromstring(base64_decode(substr($pieces[1], 7)))) !== false) {
            return [
                'width' => $info[0],
                'height' => $info[1],
                'size' => $info[0] * $info[1],
                'mime' => $info['mime'],
            ];
        }

        return false;
    }
}
