<?php
class ShoudioTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://shoudio.com/collection/1235/wendelbosroute.html');

        $this->assertEquals($info->title, "Wendelbosroute");
        $this->assertEquals($info->type, 'link');
        $this->assertEquals($info->providerName, 'Shoudio, the location based audio platform');
    }
}
