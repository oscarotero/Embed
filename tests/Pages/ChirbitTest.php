<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class ChirbitTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://chirb.it/7A9L9B',
            [
                'title' => 'Encana conference call',
                'type' => 'rich',
                'providerName' => 'chirbit',
            ]
        );
    }
}
