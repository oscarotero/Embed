<?php

namespace Embed\Tests;

class CadenaserTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://play.cadenaser.com/audio/001RD010000004275766/',
            [
                'title' => "Debate electoral gallego, en 'Hoy por Hoy' | Hoy por hoy | Audio | Cadena SER",
                'width' => 620,
                'height' => 100,
                'type' => 'rich',
                'code' => '<iframe src="http://play.cadenaser.com/widget/audio/001RD010000004275766/" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:620px;height:100px;"></iframe>',
                'providerName' => 'Hoy por hoy',
            ]
        );
    }
}
