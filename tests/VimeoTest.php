<?php

namespace Embed\Tests;

class VimeoTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://vimeo.com/235352744',
            [
                'title' => 'Vimeo Live is here',
                'providerName' => 'Vimeo',
                'width' => 640,
                'height' => 360,
                'code' => '<iframe src="https://player.vimeo.com/video/235352744?app_id=122963" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="Vimeo Live is here"></iframe>',
            ]
        );
    }
}
