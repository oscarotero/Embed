<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class ImgurTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://i.imgur.com/X6rkCc5.jpg');

        $this->assertEquals($info->title, 'Picture of a Mountain Gorilla right before he punched the photographer');
        $this->assertEquals($info->imageWidth, 2000);
        $this->assertEquals($info->imageHeight, 1332);
        $this->assertEquals($info->type, 'photo');
        $this->assertEquals($info->providerName, 'Imgur');
    }
}
