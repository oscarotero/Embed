<?php

namespace Embed\ImageInfo;

/**
 * Inteface used by all imageinfo interfaces.
 */
interface ImagesInfoInterface
{
    /**
     * Get the info of multiple images at once.
     *
     * @param array      $urls
     * @param null|array $config
     *
     * @return array
     */
    public static function getImagesInfo(array $urls, array $config = null);
}
