<?php
class PastebinTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://pastebin.com/d4biUtRm',
            [
                'title' => '[Bash] Pushing new git submodule to Heroku - Pastebin.com',
                'type' => 'rich',
                'providerName' => 'Pastebin',
                'providerUrl' => 'http://pastebin.com',
            ]
        );
    }
}
