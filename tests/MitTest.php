<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class MitTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://video.mit.edu/watch/2014-friday-after-thanksgiving-chain-reaction-29337/');

        $this->assertEquals($info->title, '2014 Friday After Thanksgiving Chain Reaction | MIT Video');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->providerName, 'MIT Media Lab');
    }
}
