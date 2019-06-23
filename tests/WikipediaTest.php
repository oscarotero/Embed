<?php

namespace Embed\Tests;

class WikipediaTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://en.wikipedia.org/wiki/Albert_Einstein',
            [
                'title' => 'Albert Einstein',
                'imageWidth' => 841,
                'type' => 'link',
                'providerName' => 'Wikipedia',
                'providerUrl' => 'https://wikipedia.org',
            ]
        );
    }
}
