<?php

namespace Embed\Tests;

class PastebinTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://pastebin.com/d4biUtRm',
            [
                'title' => '[Bash] Pushing new git submodule to Heroku - Pastebin.com',
                'type' => 'rich',
                'providerName' => 'Pastebin',
                'providerUrl' => 'https://pastebin.com',
            ]
        );
    }
}
