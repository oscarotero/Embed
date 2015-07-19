<?php
class _23hqTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.23hq.com/Zzleeper/photo/16600737');

        $this->assertEquals($info->title, 'På god väns inrådan kommer det även bultförband vid pilarna. Låter bra tycker jag. (Better safe than sorry)');
        $this->assertEquals($info->image, 'http://www.23hq.com/16171062/16600737_ac392e8a4d667e4726fbafc8a21728d5_large.jpg');
        $this->assertEquals($info->width, 756);
        $this->assertEquals($info->height, 567);
        $this->assertEquals($info->type, 'photo');
        $this->assertEquals($info->authorName, 'Zzleeper');
        $this->assertEquals($info->providerName, '23');
    }
}
