<?php
class ShoudioTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://shoudio.com/collection/1235/wendelbosroute.html');

        $this->assertString($info->title, "Wendelbosroute");
        $this->assertString($info->type, 'link');
        $this->assertString($info->providerName, 'Shoudio, the location based audio platform');
    }
}
