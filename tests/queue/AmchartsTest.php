<?php

namespace Embed\Tests;

class AmchartsTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://live.amcharts.com/czNjJ',
            [
                'title' => 'World Cup History',
                'width' => 600,
                'height' => 400,
                'type' => 'rich',
                'providerName' => 'amCharts',
            ]
        );
    }
}
