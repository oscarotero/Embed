<?php

namespace Embed\ImageInfo;

trait UtilsTrait
{
    /**
     * Extract image info from embedded images (data:image/jpeg;base64,...).
     * 
     * @param string $content
     * 
     * @return array|false
     */
    protected static function getEmbeddedImageInfo($content)
    {
        $pieces = explode(';', $content, 2);

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
