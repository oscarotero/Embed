<?php
namespace Embed\ImageSize;

/**
 * Class to retrieve the size of a gif image
 * 
 * Based in the class created by Tom Moor (https://github.com/tommoor/fastimage)
 */
class Gif implements SizeInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSize(ImageData $image)
    {
        $image->rewind();

        if (($chars = $image->getChars(11))) {
            return unpack("S*", substr($chars, 6, 4));
        }
    }
}
