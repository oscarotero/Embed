<?php

namespace Embed\Tests;

class ChirbitTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://chirb.it/7A9L9B',
            [
                'title' => 'Encana conference call',
                'width' => 380,
                'height' => 120,
                'type' => 'video',
                'providerName' => 'chirbit',
            ]
        );
    }
}
