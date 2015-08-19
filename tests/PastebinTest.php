<?php
class PastebinTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://pastebin.com/d4biUtRm');

        $this->assertString($info->title, '[Bash] Pushing new git submodule to Heroku - Pastebin.com');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->providerName, 'Pastebin');
        $this->assertString($info->providerUrl, 'http://pastebin.com');
    }
}
