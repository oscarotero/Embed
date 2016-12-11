<?php

namespace Embed\Tests;

class PastieTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://pastie.org/pastes/10916298',
            [
                'title' => '#10916298 - Pastie',
                'type' => 'rich',
                'providerName' => 'pastie',
                'providerUrl' => 'http://pastie.org',
                'code' => '<script src="http://pastie.org/10916298.js"></script>',
            ]
        );
    }
}
