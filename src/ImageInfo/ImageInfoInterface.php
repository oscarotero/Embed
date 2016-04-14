<?php

namespace Embed\ImageInfo;

/**
 * Inteface used by all imageinfo interfaces.
 */
interface ImageInfoInterface
{
    /**
     * Returns the headers.
     * 
     * @return array
     */
    public function getHeaders();

    /**
     * Returns the url.
     * 
     * @return string
     */
    public function getUrl();

    /**
     * Returns the image info.
     * 
     * @return array|false
     */
    public function getInfo();
}
