<?php

namespace Embed\Tests;

class ArchiveTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://archive.org/details/dn2015-0220_vid',
            [
                'width' => 640,
                'height' => 480,
                'type' => 'video',
                'providerName' => 'Internet Archive',
            ]
        );
    }

    public function testTwo()
    {
        $this->assertEmbed(
            'https://archive.org/details/librivoxaudio',
            [
                'type' => 'rich',
                'providerName' => 'Internet Archive',
            ]
        );
    }
}
