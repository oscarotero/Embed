<?php
class MitTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://video.mit.edu/watch/2014-friday-after-thanksgiving-chain-reaction-29337/');

        $this->assertString($info->title, '2014 Friday After Thanksgiving Chain Reaction | MIT Video');
        $this->assertString($info->type, 'video');
        $this->assertString($info->providerName, 'MIT Media Lab');
    }
}
