<?php

namespace Embed\Tests;

class AolTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://on.aol.com/video/whats-next-for-google-in-two-minutes-518288612',
            [
                'title' => "What's Next for Google in Two Minutes",
                'description' => "Wherein we smoosh Google's 2014 developer conference keynote from 2.5+ hours down to just under two minutes.",
                'type' => 'link',
                'providerName' => 'AOL.com',
            ]
        );
    }
}
