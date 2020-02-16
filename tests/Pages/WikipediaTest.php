<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class WikipediaTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://en.wikipedia.org/wiki/Albert_Einstein',
            [
                'title' => 'Albert Einstein',
                'providerName' => 'Wikipedia',
                'providerUrl' => 'https://en.wikipedia.org',
            ]
        );
    }
}
