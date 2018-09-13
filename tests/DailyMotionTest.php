<?php

namespace Embed\Tests;

class DailyMotionTest extends AbstractTestCase
{
    /**
     * @group ignore
     */
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.dailymotion.com/video/xy0wd',
            [
                'title' => 'Chats paresseux',
                'type' => 'video',
                'url' => 'https://www.dailymotion.com/video/xy0wd',
                'image' => 'https://s1-ssl.dmcdn.net/Ay0o/x240-kWu.jpg',
                'imageWidth' => 320,
                'imageHeight' => 240,
                'providerName' => 'Dailymotion',
                'providerUrl' => 'https://www.dailymotion.com',
                'code' => '<iframe frameborder="0" width="480" height="360" src="https://www.dailymotion.com/embed/video/xy0wd" allowfullscreen allow="autoplay"></iframe>'
            ]
        );
    }
}
