<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class GithubTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://gist.github.com/oscarotero/7749998');

        $this->assertEquals($info->title, 'oscarotero/Git-cheatsheet.sh');
        $this->assertEquals($info->imageWidth, 140);
        $this->assertEquals($info->imageHeight, 140);
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'Gist');
    }
}
