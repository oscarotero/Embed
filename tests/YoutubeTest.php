<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class YoutubeTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.youtube.com/watch?v=eiHXASgRTcA');

        $this->assertEquals($info->title, 'Noisy kittens waiting for dinner!');
        $this->assertEquals($info->description, 'Disclaimer - 7 week old fostered kittens waiting on their dinner being prepared. They had been ill with cat flu and were just starting to get their appetite ...');
        $this->assertEquals($info->imageWidth, 480);
        $this->assertEquals($info->imageHeight, 360);
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->authorName, 'smshdchrb');
        $this->assertEquals($info->authorUrl, 'http://www.youtube.com/user/smshdchrb');
        $this->assertEquals($info->providerName, 'YouTube');
        $this->assertEquals($info->providerUrl, 'http://www.youtube.com/');
    }
}
