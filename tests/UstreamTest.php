<?php
class UstreamTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.ustream.tv/channel/red-shoes-billiards-60803-camera-1');

        $this->assertEquals($info->title, 'Red Shoes Billiards 1pkt,banks camera 1');
        $this->assertEquals($info->imageWidth, 120);
        $this->assertEquals($info->imageHeight, 90);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, 'redsh0es');
        $this->assertEquals($info->authorUrl, 'http://www.ustream.tv/user/redsh0es');
        $this->assertEquals($info->providerName, 'Ustream');
        $this->assertEquals($info->providerUrl, 'http://www.ustream.tv/');
    }
}
