<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class RdioTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.rdio.com/artist/Various_Artists/album/50_Dance_Hits_2015/');

        $this->assertEquals($info->title, '50 Dance Hits 2015');
        $this->assertEquals($info->imageWidth, 400);
        $this->assertEquals($info->imageHeight, 400);
        $this->assertEquals($info->type, 'rich');
    }
}
