<?php

class SassmeisterTest extends TestCaseBase
{
    public function testGist()
    {
        $this->assertEmbed(
            'http://sassmeister.com/gist/1122e441f0434ec6eb2a',
            [
                'title' => 'SassMeister | The Sass Playground!',
                'imageWidth' => 240,
                'imageHeight' => 240,
                'type' => 'rich',
                'providerName' => 'sassmeister',
            ]
        );
    }
}
