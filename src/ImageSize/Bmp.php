<?php
namespace Embed\ImageSize;

/**
 * Class to retrieve the size of a bmp image
 * 
 * Based in the class created by Tom Moor (https://github.com/tommoor/fastimage)
 */
class Bmp implements SizeInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSize(ImageData $image)
    {
        $image->rewind();

        if (($chars = $image->getChars(29))) {
            $chars = substr($chars, 14, 14);
            $type = unpack('C', $chars);

            return (reset($type) == 40) ? unpack('L*', substr($chars, 4)) : unpack('L*', substr($chars, 4, 8));
        }
    }
}
