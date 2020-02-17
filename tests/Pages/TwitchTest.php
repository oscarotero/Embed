<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class TwitchTest extends AbstractTestCase
{
    /**
     * @group ignore
     */
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.twitch.tv/videos/72749628',
            [
                'title' => 'EU LCS Summer - Week 3 Day 1: FNC vs. S04 | H2K vs. G2 (EULCS2)',
                'code' => '<iframe src="https://player.twitch.tv/?%21branding=&amp;autoplay=false&amp;video=v72749628" width="500" height="281" frameborder="0" scrolling="no" allowfullscreen></iframe>',
                'providerName' => 'Twitch',
                'providerUrl' => 'https://www.twitch.tv/',
            ]
        );
    }
}
