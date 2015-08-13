<?php
class FlickrTest extends TestCaseBase
{
    public function testSets()
    {
        $info = Embed\Embed::create('https://www.flickr.com/photos/desescribir/sets/72157650686499888');

        $this->assertString($info->imageWidth, 1024);
        $this->assertString($info->imageHeight, 680);
        $this->assertString($info->code, '<iframe src="https://www.flickr.com/photos/desescribir/sets/72157650686499888/player" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:640px;height:425px;"></iframe>');
        $this->assertString($info->type, 'rich');
    }

    public function testProfile()
    {
        $info = Embed\Embed::create('https://www.flickr.com/photos/desescribir');

        $this->assertString($info->imageWidth, 2048);
        $this->assertString($info->imageHeight, 1454);
        $this->assertString($info->code, '<iframe src="https://www.flickr.com/photos/desescribir/player" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:640px;height:425px;"></iframe>');
        $this->assertString($info->type, 'rich');
    }
}
