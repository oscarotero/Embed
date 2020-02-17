<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class AnimotoTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://animoto.com/play/GjsJ1gu0WDRfr4pGw12xZQ',
            [
                'title' => 'taco bell',
                'providerName' => 'Animoto',
            ]
        );
    }
}
