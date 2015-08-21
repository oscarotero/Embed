<?php
class MitTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://video.mit.edu/watch/2014-friday-after-thanksgiving-chain-reaction-29337/',
            [
                'title' => '2014 Friday After Thanksgiving Chain Reaction | MIT Video',
                'type' => 'video',
                'providerName' => 'MIT Media Lab',
            ]
        );
    }
}
