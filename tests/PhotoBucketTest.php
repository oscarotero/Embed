<?php
class PhotoBucketTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://media.photobucket.com/user/Ignwar/media/Album%20Deserts/MoonriseMonumentValleyUtah.jpg.html?filters[term]=sunsets&filters[primary]=images');

        $this->assertString($info->title, 'Deserts');
        $this->assertString($info->description, "I P uploaded this image to 'Album Deserts'.  See the album on Photobucket.");
        $this->assertString($info->imageWidth, 1600);
        $this->assertString($info->imageHeight, 1200);
        $this->assertString($info->type, 'photo');
    }
}
