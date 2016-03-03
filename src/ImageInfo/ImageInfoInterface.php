<?php

namespace Embed\ImageInfo;

/**
 * Inteface used by all imageinfo interfaces.
 */
interface ImageInfoInterface
{
    /**
     * Get the info of multiple images at once.
     *
     * @param array      $urls
     * @param null|array $config
     * @param array      &$connections
     *
     * @return array
     */
    public static function getImagesInfo(array $urls, array $config = null, array &$connections = []);

    /**
     * Returns the headers
     * 
     * @return array
     */
    public function getHeaders();

    /**
     * Returns the url
     * 
     * @return string
     */
    public function getUrl();
}
