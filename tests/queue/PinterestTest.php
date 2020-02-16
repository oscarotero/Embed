<?php
declare(strict_types = 1);

namespace Embed\Tests;

class PinterestTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.pinterest.com/pin/106890191127977979/',
            [
                'title' => 'Pin by Leslie Carruthers on Icons | Jack nicholson, Famous men, Hollywood stars',
                'width' => 236,
                'height' => 442,
                'code' => '<a data-pin-do="embedPin" data-pin-lang="es" href="https://www.pinterest.com/pin/106890191127977979/"></a><script async defer src="//assets.pinterest.com/js/pinit.js"></script>',
                'providerName' => 'Pinterest',
            ]
        );
    }
}
