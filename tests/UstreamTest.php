<?php

namespace Embed\Tests;

class UstreamTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.ustream.tv/channel/red-shoes-billiards-60803-camera-1',
            [
                'title' => 'Red Shoes Billiards 1pkt,banks camera 1',
                'imageWidth' => 120,
                'imageHeight' => 90,
                'type' => 'video',
                'authorName' => 'redsh0es',
                'providerName' => 'Ustream',
                'providerUrl' => 'http://www.ustream.tv/',
            ]
        );
    }
}
