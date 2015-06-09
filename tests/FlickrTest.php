<?php
class FlickrTest extends PHPUnit_Framework_TestCase
{
    public function testSets()
    {
        $info = Embed\Embed::create('https://www.flickr.com/photos/desescribir/sets/72157650686499888');

        $this->assertEquals($info->imageWidth, 1024);
        $this->assertEquals($info->imageHeight, 680);
        $this->assertEquals($info->code, '<iframe src="https://www.flickr.com/photos/desescribir/sets/72157650686499888/player" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:640px;height:425px;"></iframe>');
        $this->assertEquals($info->type, 'rich');
    }

    public function testProfile()
    {
        $info = Embed\Embed::create('https://www.flickr.com/photos/desescribir');

        $this->assertEquals($info->imageWidth, 2048);
        $this->assertEquals($info->imageHeight, 1454);
        $this->assertEquals($info->code, '<iframe src="https://www.flickr.com/photos/desescribir/player" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:640px;height:425px;"></iframe>');
        $this->assertEquals($info->type, 'rich');
    }
}
