<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class CadenaserTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://play.cadenaser.com/audio/001RD010000004275766/',
            [
                'title' => "Debate electoral gallego, en 'Hoy por Hoy' | Hoy por Hoy | Audio | Cadena SER",
                'code' => '<iframe src="https://play.cadenaser.com/widget/" frameborder="0" width="100%" height="360" allowTransparency="true"></iframe>',
                'providerName' => 'Cadena SER',
            ]
        );
    }
}
