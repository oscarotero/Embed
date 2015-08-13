<?php
class DailyMotionTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.dailymotion.com/video/xy0wd_chats-paresseux');

        $this->assertString($info->title, 'Chats paresseux');
        $this->assertString($info->type, 'video');
        $this->assertString($info->url, 'http://www.dailymotion.com/video/xy0wd_chats-paresseux_animals');
        $this->assertString($info->image, 'http://s1.dmcdn.net/Ay0o/x240-kWu.jpg');
        $this->assertString($info->imageWidth, 320);
        $this->assertString($info->imageHeight, 240);
        $this->assertString($info->providerName, 'Dailymotion');
        $this->assertString($info->providerUrl, 'http://www.dailymotion.com');
    }
}
