<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class UstreamTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.ustream.tv/channel/red-shoes-billiards-60803-camera-1',
            [
                'title' => 'Red Shoes Billiards 1pkt,banks camera 1',
                'type' => 'video',
                'authorName' => 'redsh0es',
                'providerUrl' => 'http://www.ustream.tv/',
            ]
        );
    }
}
