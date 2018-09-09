<?php

namespace Embed\Tests;

class ChirbitTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://chirb.it/7A9L9B',
            [
                'title' => 'Chirbit [nvanderklippe] Encana conference call',
                'width' => 320,
                'height' => 120,
                'type' => 'video',
                'providerName' => 'Chirbit',
            ]
        );
    }
}
