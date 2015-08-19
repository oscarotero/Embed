<?php
class UstreamTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.ustream.tv/channel/red-shoes-billiards-60803-camera-1');

        $this->assertString($info->title, 'Red Shoes Billiards 1pkt,banks camera 1');
        $this->assertString($info->imageWidth, 120);
        $this->assertString($info->imageHeight, 90);
        $this->assertString($info->type, 'video');
        $this->assertString($info->authorName, 'redsh0es');
        $this->assertString($info->authorUrl, 'http://www.ustream.tv/user/redsh0es');
        $this->assertString($info->providerName, 'Ustream');
        $this->assertString($info->providerUrl, 'http://www.ustream.tv/');
    }
}
