<?php

namespace Embed\Tests;

class PinterestTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.pinterest.com/pin/106890191127977979/',
            [
                'title' => 'Icons',
                'width' => 236,
                'height' => 442,
                'code' => '<a data-pin-do="embedPin" data-pin-lang="es" href="https://www.pinterest.com/pin/106890191127977979/"></a><script async defer src="//assets.pinterest.com/js/pinit.js"></script>',
                'providerName' => 'Pinterest',
            ]
        );
    }
}
