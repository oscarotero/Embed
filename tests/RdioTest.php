<?php
class RdioTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.rdio.com/artist/Various_Artists/album/50_Dance_Hits_2015/');

        $this->assertString($info->title, '50 Dance Hits 2015');
        $this->assertString($info->imageWidth, 400);
        $this->assertString($info->imageHeight, 400);
        $this->assertString($info->type, 'rich');
    }
}
