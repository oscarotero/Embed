<?php

namespace Embed\Tests;

class CartodbTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://porcentua26j.cartodb.com/viz/ab0f51e6-3c16-11e6-b12e-0e5db1731f59',
            [
                'title' => 'Resultados 26J / 20Dj',
                'height' => 520,
                'type' => 'rich',
                'code' => '<iframe src="https://porcentua26j.carto.com/viz/ab0f51e6-3c16-11e6-b12e-0e5db1731f59/embed_map" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:100%;height:520px;"></iframe>',
                'providerName' => 'CARTO',
            ]
        );
    }
}
