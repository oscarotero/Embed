<?php
class ParleysTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://www.parleys.com/play/514892290364bc17fc56c4fa/chapter0/about');

        $this->assertString($info->type, 'video');
        $this->assertString($info->providerName, 'parleys');
    }
}
