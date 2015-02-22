<?php
class ImageInfoTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\ImageInfo\Curl::getImageInfo([
            'value' => 'http://a.images.blip.tv/NostalgiaCritic-NCTheMatrix187.jpg',
        ]);

        $this->assertEquals($info, [
            'width' => 620,
            'height' => 274,
            'size' => 169880,
            'mime' => 'image/jpeg',
        ]);
    }
}
