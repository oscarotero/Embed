<?php
class PhotoBucketTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://media.photobucket.com/user/Ignwar/media/Album%20Deserts/MoonriseMonumentValleyUtah.jpg.html?filters[term]=sunsets&filters[primary]=images');

        $this->assertEquals($info->title, 'Deserts');
        $this->assertEquals($info->description, "I P uploaded this image to 'Album Deserts'.  See the album on Photobucket.");
        $this->assertEquals($info->imageWidth, 1600);
        $this->assertEquals($info->imageHeight, 1200);
        $this->assertEquals($info->type, 'photo');
    }
}
