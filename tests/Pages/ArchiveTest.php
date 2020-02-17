<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class ArchiveTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://archive.org/details/dn2015-0220_vid',
            [
                'title' => 'Democracy Now! Friday, February 20, 2015',
                'providerName' => 'Internet Archive',
                'publishedTime' => '2015-02-20 00:00:00',
            ]
        );
    }

    public function testTwo()
    {
        $this->assertEmbed(
            'https://archive.org/details/librivoxaudio',
            [
                'title' => 'The LibriVox Free Audiobook Collection : Free Audio : Free Download, Borrow and Streaming : Internet Archive',
                'providerName' => 'Internet Archive',
            ]
        );
    }
}
