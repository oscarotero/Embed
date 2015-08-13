<?php
class ArchiveTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://archive.org/details/dn2015-0220_vid');

        $this->assertString($info->width, 640);
        $this->assertString($info->height, 480);
        $this->assertString($info->type, 'video');
        $this->assertString($info->providerName, 'Internet Archive');
    }
}
