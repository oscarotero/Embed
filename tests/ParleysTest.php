<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class ParleysTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('https://www.parleys.com/play/514892290364bc17fc56c4fa/chapter0/about');

        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->providerName, 'parleys');
    }
}
