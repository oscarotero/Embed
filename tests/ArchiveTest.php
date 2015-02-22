<?php
class ArchiveTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://archive.org/details/dn2015-0220_vid');

        $this->assertEquals($info->width, 640);
        $this->assertEquals($info->height, 480);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->providerName, 'Internet Archive');
    }
}
