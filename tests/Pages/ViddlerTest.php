<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class ViddlerTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.viddler.com/v/bdce8c7',
            [
                'title' => 'Viddler Platform Overview',
                'code' => '<iframe src="https://www.viddler.com/embed/bdce8c7" frameborder="0" width="1280" height="720" allowTransparency="true"></iframe>',
                'providerName' => 'Viddler',
                'providerUrl' => 'https://www.viddler.com',
            ]
        );
    }
}
