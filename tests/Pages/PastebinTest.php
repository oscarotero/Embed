<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class PastebinTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://pastebin.com/d4biUtRm',
            [
                'title' => '[Bash] Pushing new git submodule to Heroku - Pastebin.com',
                'providerName' => 'Pastebin',
                'providerUrl' => 'https://pastebin.com',
            ]
        );
    }
}
