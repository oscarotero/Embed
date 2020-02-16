<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class PinterestTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.pinterest.com/pin/106890191127977979/',
            [
                'title' => 'Pin by Leslie Carruthers on Icons | Jack nicholson, Famous men, Famous faces',
                'code' => '<a data-pin-do="embedPin" href="https://www.pinterest.com/pin/106890191127977979/"></a><script async defer src="//assets.pinterest.com/js/pinit.js"></script>',
                'providerName' => 'Pinterest',
            ]
        );
    }
}
