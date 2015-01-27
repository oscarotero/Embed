<?php
namespace Embed\ImageSize;

/**
 * Class to retrieve the size of a png image
 * 
 * Based in the class created by Tom Moor (https://github.com/tommoor/fastimage)
 */
class Png implements SizeInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSize(ImageData $image)
    {
        $image->rewind();

        if (($chars = $image->getChars(25))) {
            return array_values(unpack("N*", substr($chars, 16, 8)));
        }
    }
}
