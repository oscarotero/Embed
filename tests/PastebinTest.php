<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class PastebinTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://pastebin.com/d4biUtRm');

        $this->assertEquals($info->title, '[Bash] Pushing new git submodule to Heroku - Pastebin.com');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'Pastebin');
        $this->assertEquals($info->providerUrl, 'http://pastebin.com');
    }
}
