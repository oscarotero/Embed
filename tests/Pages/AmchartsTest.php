<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class AmchartsTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://live.amcharts.com/czNjJ',
            [
                'title' => 'World Cup History',
                'type' => 'rich',
                'providerName' => 'amCharts',
            ]
        );
    }
}
