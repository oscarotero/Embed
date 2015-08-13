<?php
class YoutubeTest extends TestCaseBase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.youtube.com/watch?v=eiHXASgRTcA');

        $this->assertString($info->title, 'Noisy kittens waiting for dinner!');
        $this->assertString($info->imageWidth, 480);
        $this->assertString($info->imageHeight, 360);
        $this->assertString($info->type, 'video');
        $this->assertString($info->authorName, 'smshdchrb');
        $this->assertString($info->authorUrl, 'https://www.youtube.com/user/smshdchrb');
        $this->assertString($info->providerName, 'YouTube');
        $this->assertString($info->providerUrl, 'https://www.youtube.com/');
    }
}
