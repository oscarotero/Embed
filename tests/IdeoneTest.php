<?php

namespace Embed\Tests;

class IdeoneTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://ideone.com/Whjntg',
            [
                'title' => 'Ideone.com',
                'type' => 'rich',
                'providerName' => 'Ideone.com',
                'providerUrl' => 'https://ideone.com',
                'code' => '<script src="https://ideone.com/e.js/Whjntg"></script>',
            ]
        );
    }
}
