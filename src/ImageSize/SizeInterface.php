<?php
namespace Embed\ImageSize;

/**
 * Interface used by all size classes
 */
interface SizeInterface
{
    /**
     * Gets the image size
     *
     * @return array|null
     */
    public static function getSize(ImageData $image);
}
