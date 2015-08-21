<?php
class _23hqTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.23hq.com/Zzleeper/photo/16600737',
            [
                'title' => 'På god väns inrådan kommer det även bultförband vid pilarna. Låter bra tycker jag. (Better safe than sorry)',
                'image' => 'http://www.23hq.com/16171062/16600737_ac392e8a4d667e4726fbafc8a21728d5_large.jpg',
                'width' => 756,
                'height' => 567,
                'type' => 'photo',
                'authorName' => 'Zzleeper',
                'providerName' => '23',
            ]
        );
    }
}
