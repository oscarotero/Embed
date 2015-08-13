<?php
class _23hqTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.23hq.com/Zzleeper/photo/16600737');

        $this->assertString($info->title, 'På god väns inrådan kommer det även bultförband vid pilarna. Låter bra tycker jag. (Better safe than sorry)');
        $this->assertString($info->image, 'http://www.23hq.com/16171062/16600737_ac392e8a4d667e4726fbafc8a21728d5_large.jpg');
        $this->assertString($info->width, 756);
        $this->assertString($info->height, 567);
        $this->assertString($info->type, 'photo');
        $this->assertString($info->authorName, 'Zzleeper');
        $this->assertString($info->providerName, '23');
    }
}
