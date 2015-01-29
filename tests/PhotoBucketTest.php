<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class PhotoBucketTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://media.photobucket.com/user/Ignwar/media/Album%20Deserts/MoonriseMonumentValleyUtah.jpg.html?filters[term]=sunsets&filters[primary]=images');

        $this->assertEquals($info->title, 'Deserts');
        $this->assertEquals($info->description, 'This photo was uploaded by Ignwar.');
        $this->assertEquals($info->imageWidth, 1600);
        $this->assertEquals($info->imageHeight, 1200);
        $this->assertEquals($info->type, 'photo');
    }
}
