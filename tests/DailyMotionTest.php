<?php
declare(strict_types = 1);

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
                'url' => 'https://www.dailymotion.com/video/xy0wd',
                'providerName' => 'Dailymotion',
                'providerUrl' => 'https://www.dailymotion.com',
                'code' => '<iframe frameborder="0" width="480" height="360" src="https://www.dailymotion.com/embed/video/xy0wd" allowfullscreen allow="autoplay"></iframe>',
            ]
        );
    }
}
