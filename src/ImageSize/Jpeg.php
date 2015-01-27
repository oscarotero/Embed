<?php
namespace Embed\ImageSize;

/**
 * Class to retrieve the size of a jpeg image
 * 
 * Based in the class created by Tom Moor (https://github.com/tommoor/fastimage)
 */
class Jpeg implements SizeInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSize(ImageData $image)
    {
        $image->rewind();

        $state = null;
        $skip = 0;

        while (true) {
            switch ($state) {
                case 'started':
                    if (($b = self::readByte($image)) === false) {
                        return null;
                    }

                    $state = $b === 0xFF ? 'sof' : 'started';
                    break;

                case 'sof':
                    if (($b = self::readByte($image)) === false) {
                        return null;
                    }

                    if (in_array($b, range(0xe0, 0xef))) {
                        $state = 'skipframe';
                    } elseif (in_array($b, array_merge(range(0xC0, 0xC3), range(0xC5, 0xC7), range(0xC9, 0xCB), range(0xCD, 0xCF)))) {
                        $state = 'readsize';
                    } elseif ($b === 0xFF) {
                        $state = 'sof';
                    } else {
                        $state = 'skipframe';
                    }
                    break;

                case 'skipframe':
                    if (($skip = self::toInteger($image->getChars(2)) - 2) === false) {
                        return null;
                    }
                    $state = 'doskip';
                    break;

                case 'doskip':
                    $image->getChars($skip);
                    $state = 'started';
                    break;

                case 'readsize':
                    if (($c = $image->getChars(7))) {
                        return array(self::toInteger(substr($c, 5, 2)), self::toInteger(substr($c, 3, 2)));
                    }

                    return null;

                default:
                    $image->getChars(2);
                    $state = 'started';
            }
        }
    }

    /**
     * Returns the current byte
     *
     * @return false|string
     */
    private static function readByte(ImageData $image)
    {
        if (($c = $image->getChars(1))) {
            $b = unpack("C", $c);

            return reset($b);
        }

        return false;
    }

    /**
     * Returns an integer
     *
     * @return false|integer
     */
    private static function toInteger($str)
    {
        if (($size = unpack("C*", $str))) {
            return ($size[1] << 8) + $size[2];
        }

        return false;
    }
}
