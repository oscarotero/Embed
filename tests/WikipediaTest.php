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
                'imageWidth' => 700,
                'imageHeight' => 899,
                'type' => 'link',
                'providerName' => 'Wikipedia',
                'providerUrl' => 'https://wikipedia.org',
            ]
        );
    }
}
