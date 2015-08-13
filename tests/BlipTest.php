<?php
class BlipTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://blip.tv/indevelopment/iamsorry-6839170');

        $this->assertString($info->title, '#IAMSORRY');
        $this->assertString($info->imageWidth, 720);
        $this->assertString($info->imageHeight, 405);
        $this->assertString($info->type, 'video');
        $this->assertString($info->providerName, 'Blip');
        $this->assertString($info->code, '<iframe src="http://blip.tv/play/AYOht2YC.x?p=1" width="1280" height="750" frameborder="0" allowfullscreen></iframe>');
    }
}
