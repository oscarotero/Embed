<?php

namespace Embed\Tests;

class DailyMotionTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.dailymotion.com/video/xy0wd',
            [
                'title' => 'Chats paresseux',
                'type' => 'video',
                'url' => 'http://www.dailymotion.com/video/xy0wd',
                'image' => 'http://s1.dmcdn.net/Ay0o/x240-kWu.jpg',
                'imageWidth' => 320,
                'imageHeight' => 240,
                'providerName' => 'Dailymotion',
                'providerUrl' => 'http://www.dailymotion.com',
                'code' => '<iframe frameborder="0" width="480" height="360" src="http://www.dailymotion.com/embed/video/xy0wd" allowfullscreen allow="autoplay"></iframe>'
            ]
        );
    }
}
