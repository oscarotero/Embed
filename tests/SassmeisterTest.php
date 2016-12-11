<?php

namespace Embed\Tests;

class SassmeisterTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://sassmeister.com/gist/1122e441f0434ec6eb2a',
            [
                'title' => 'SassMeister | The Sass Playground!',
                'type' => 'rich',
                'providerName' => 'sassmeister',
            ]
        );
    }
}
