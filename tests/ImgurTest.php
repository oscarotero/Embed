<?php
class ImgurTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://i.imgur.com/X6rkCc5.jpg');

        $this->assertString($info->title, 'http://i.imgur.com/X6rkCc5.jpg');
        $this->assertString($info->imageWidth, 2000);
        $this->assertString($info->imageHeight, 1332);
        $this->assertString($info->type, 'photo');
        $this->assertString($info->providerName, 'Imgur');
    }
}
