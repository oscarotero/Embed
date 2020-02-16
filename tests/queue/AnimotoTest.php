<?php

namespace Embed\Tests;

class AnimotoTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://animoto.com/play/GjsJ1gu0WDRfr4pGw12xZQ',
            [
                'title' => 'taco bell',
                'width' => 640,
                'height' => 360,
                'type' => 'video',
                'providerName' => 'Animoto',
            ]
        );
    }
}
