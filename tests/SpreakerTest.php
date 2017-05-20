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
                'code' => '<iframe src="https://widget.spreaker.com/player?episode_id=7657563&amp;theme=light&amp;playlist=show&amp;cover_image_url=https%3A%2F%2Fd3wo5wojvuv7l.cloudfront.net%2Fimages.spreaker.com%2Foriginal%2F07176451fd3625d19c5e5d88d9f1bfbb.jpg" width="100%" height="500" frameborder="0"></iframe>',
                'providerName' => 'Spreaker',
                'providerUrl' => 'https://www.spreaker.com/',
            ]
        );
    }
}
