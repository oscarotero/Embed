<?php

namespace Embed\Tests;

class DailyMotionTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.dailymotion.com/video/xy0wd_chats-paresseux',
            [
                'title' => 'Chats paresseux',
                'type' => 'video',
                'url' => 'http://www.dailymotion.com/video/xy0wd_chats-paresseux_animals',
                'image' => 'http://s1.dmcdn.net/Ay0o/x240-kWu.jpg',
                'imageWidth' => 320,
                'imageHeight' => 240,
                'providerName' => 'Dailymotion',
                'providerUrl' => 'http://www.dailymotion.com',
            ]
        );
    }
}
