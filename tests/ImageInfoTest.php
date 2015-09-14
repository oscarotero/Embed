<?php
class ImageInfoTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\ImageInfo\Curl::getImageInfo([
            'value' => 'http://www.mixdecultura.ro/wp-content/uploads/2013/03/galicia-locuinte-celtice.jpg',
        ]);

        $this->assertEquals($info, [
            'width' => 600,
            'height' => 408,
            'size' => 244800,
            'mime' => 'image/jpeg',
        ]);
    }
}
