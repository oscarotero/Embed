<?php
class ImageInfoTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\ImageInfo\Curl::getImageInfo([
            'value' => 'http://a.images.blip.tv/NostalgiaCritic-NCTheMatrix187.jpg',
        ]);

        $this->assertString($info, [
            'width' => 620,
            'height' => 274,
            'size' => 169880,
            'mime' => 'image/jpeg',
        ]);
    }
}
