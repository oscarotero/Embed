<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class ImageInfoTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\ImageInfo\Curl::getImageInfo('http://a.images.blip.tv/NostalgiaCritic-NCTheMatrix187.jpg');

        $this->assertEquals($info, [620, 274, 'image/jpeg']);
    }
}
