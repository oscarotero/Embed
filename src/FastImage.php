<?php
/**
 * Class created by Tom Moor (https://github.com/tommoor/fastimage)
 *
 * FastImage - Because sometimes you just want the size!
 * Based on the Ruby Implementation by Steven Sykes (https://github.com/sdsykes/fastimage)
 *
 * Copyright (c) 2012 Tom Moor
 * Tom Moor, http://tommoor.com
 *
 * MIT Licensed
 * @version 0.1
 *
 * Modified for Embed library by Oscar Otero (https://github.com/oscarotero/Embed)
 */

namespace Embed;

class FastImage
{
    private $strpos = 0;
    private $str;
    private $uri;
    private $type;
    private $handle;

    public function __construct($uri = null)
    {
        if ($uri) {
            $this->load($uri);
        }
    }

    /**
     * Opens an image stream
     *
     * @param string $uri
     */
    public function load($uri)
    {
        if ($this->handle) {
            $this->close();
        }

        $this->uri = $uri;

        $this->handle = @fopen($uri, 'r', false, stream_context_create(array(
            'http' => array(
                'user_agent' => 'Embed/FastImage PHP Library',
            ),
        )));

        if ($this->handle === false) {
            throw new \Exception('Failed to open streem');
        }
    }

    /**
     * Closes the stream
     */
    public function close()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }

    /**
     * Gets the image size
     *
     * @return array|false
     */
    public function getSize()
    {
        $this->strpos = 0;

        if ($this->getType() && ($size = $this->parseSize())) {
            return array_values($size);
        }

        return false;
    }

    /**
     * Gets the image type
     *
     * @return string|false
     */
    public function getType()
    {
        $this->strpos = 0;

        if (!$this->type) {
            switch ($this->getChars(2)) {
                case "BM":
                    return $this->type = 'bmp';
                case "GI":
                    return $this->type = 'gif';
                case chr(0xFF).chr(0xd8):
                    return $this->type = 'jpeg';
                case chr(0x89).'P':
                    return $this->type = 'png';
                case chr(0x00).chr(0x00):
                    return $this->type = 'ico';

                default:
                    return false;
            }
        }

        return $this->type;
    }

    /**
     * Parses the image type
     *
     * @return array|null
     */
    private function parseSize()
    {
        $this->strpos = 0;

        switch ($this->type) {
            case 'png':
                return $this->parseSizeForPNG();
            case 'gif':
                return $this->parseSizeForGIF();
            case 'bmp':
                return $this->parseSizeForBMP();
            case 'jpeg':
                return $this->parseSizeForJPEG();
        }

        return;
    }

    /**
     * Parses the image size for PNG
     *
     * @return array|null
     */
    private function parseSizeForPNG()
    {
        if (($chars = $this->getChars(25))) {
            return unpack("N*", substr($chars, 16, 8));
        }
    }

    /**
     * Parses the image size for GIF
     *
     * @return array|null
     */
    private function parseSizeForGIF()
    {
        if (($chars = $this->getChars(11))) {
            return unpack("S*", substr($chars, 6, 4));
        }
    }

    /**
     * Parses the image size for BMP
     *
     * @return array|null
     */
    private function parseSizeForBMP()
    {
        if (($chars = $this->getChars(29))) {
            $chars = substr($chars, 14, 14);
            $type = unpack('C', $chars);

            return (reset($type) == 40) ? unpack('L*', substr($chars, 4)) : unpack('L*', substr($chars, 4, 8));
        }
    }

    /**
     * Parses the image size for JPEG
     *
     * @return array|null
     */
    private function parseSizeForJPEG()
    {
        $state = null;
        $skip = 0;

        while (true) {
            switch ($state) {
                case 'started':
                    if (($b = $this->getByte()) === false) {
                        return false;
                    }

                    $state = $b === 0xFF ? 'sof' : 'started';
                    break;

                case 'sof':
                    $b = $this->getByte();

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
                    $skip = $this->readInt($this->getChars(2)) - 2;
                    $state = 'doskip';
                    break;

                case 'doskip':
                    $this->getChars($skip);
                    $state = 'started';
                    break;

                case 'readsize':
                    if (($c = $this->getChars(7))) {
                        return array($this->readInt(substr($c, 5, 2)), $this->readInt(substr($c, 3, 2)));
                    }

                    return;

                default:
                    $this->getChars(2);
                    $state = 'started';
            }
        }
    }

    /**
     * Gets the stream characters until a specific position
     *
     * @param integer $n The end position of characters
     *
     * @return false|string
     */
    private function getChars($n)
    {
        $response = null;

        // do we need more data?
        if ($this->strpos + $n -1 >= strlen($this->str)) {
            $end = ($this->strpos + $n);

            while (strlen($this->str) < $end && $response !== false) {
                // read more from the file handle
                $need = $end - ftell($this->handle);

                if ($response = fread($this->handle, $need)) {
                    $this->str .= $response;
                } else {
                    return false;
                }
            }
        }

        $result = substr($this->str, $this->strpos, $n);
        $this->strpos += $n;

        // we are dealing with bytes here, so force the encoding
        return mb_convert_encoding($result, "8BIT");
    }

    /**
     * Returns the current byte
     *
     * @return false|string
     */
    private function getByte()
    {
        if (($c = $this->getChars(1))) {
            $b = unpack("C", $c);

            return reset($b);
        }

        return false;
    }

    /**
     * Returns an integer
     *
     * @return integer
     */
    private function readInt($str)
    {
        $size = unpack("C*", $str);

        return ($size[1] << 8) + $size[2];
    }

    public function __destruct()
    {
        $this->close();
    }

    /**
     * Returns the size of all images
     *
     * @param array $images
     *
     * @return array
     */
    public static function getImagesSize(array $images)
    {
        $imagesSizes = array();

        foreach ($images as $image) {
            if (!$image) {
                continue;
            }

            try {
                $Image = new static($image);

                if ($Image->getType() === 'ico') {
                    $imagesSizes[] = array(
                        'src' => $image,
                        'width' => 0,
                        'height' => 0,
                    );

                    continue;
                }

                list($width, $height) = $Image->getSize();

                $imagesSizes[] = array(
                    'src' => $image,
                    'width' => $width,
                    'height' => $height,
                );
            } catch (\Exception $Exception) {
                continue;
            }
        }

        return $imagesSizes;
    }
}
