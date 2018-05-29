<?php

namespace Embed\Tests;

class InfogramTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://infogr.am/7743c36a-f3ca-4465-9a80-a8abbd5d8dc4',
            [
                'title' => 'Frost Bank Advisors (online graphic)',
                'width' => 550,
                'height' => 600,
                'type' => 'rich',
                'providerName' => 'Infogram',
                'authorUrl' => 'https://infogram.com/sabjnewsroom01',
            ]
        );
    }
}
