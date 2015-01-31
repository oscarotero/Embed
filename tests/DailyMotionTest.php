<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class DailyMotionTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.dailymotion.com/video/xy0wd_chats-paresseux');

        $this->assertEquals($info->title, 'Chats paresseux');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->url, 'http://www.dailymotion.com/video/xy0wd_chats-paresseux_animals');
        $this->assertEquals($info->image, 'http://s1.dmcdn.net/Ay0o/x240-kWu.jpg');
        $this->assertEquals($info->imageWidth, 320);
        $this->assertEquals($info->imageHeight, 240);
        $this->assertEquals($info->providerName, 'Dailymotion');
        $this->assertEquals($info->providerUrl, 'http://www.dailymotion.com');
    }
}
