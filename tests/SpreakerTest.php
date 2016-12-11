<?php

namespace Embed\Tests;

class SpreakerTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.spreaker.com/user/angelclark/angel-clark-ice-cream-tocos',
            [
                'title' => 'Angel Clark: Ice Cream Toco\'s - Angel Clark Show',
                'type' => 'rich',
                'code' => '<iframe src="https://www.spreaker.com/embed/player/standard?autoplay=false&amp;episode_id=7657563" frameborder="0" allowTransparency="true" style="min-width:400px;border:none;overflow:hidden;width:100%;height:131px;"></iframe>',
                'providerName' => 'Spreaker',
                'providerUrl' => 'https://www.spreaker.com/',
            ]
        );
    }
}
