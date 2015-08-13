<?php
class BlipTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://blip.tv/indevelopment/iamsorry-6839170');

        $this->assertEquals($info->title, '#IAMSORRY');
        $this->assertEquals($info->imageWidth, 720);
        $this->assertEquals($info->imageHeight, 405);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->providerName, 'Blip');
        $this->assertEquals($info->code, '<iframe src="http://blip.tv/play/AYOht2YC.x?p=1" width="1280" height="750" frameborder="0" allowfullscreen></iframe>');
    }
}
