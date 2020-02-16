<?php
declare(strict_types = 1);

namespace Embed\Tests;

class SlidesTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://slides.com/alexwalker/responsive-svg/',
            [
                'title' => 'responsive-svg',
                // 'type' => 'rich',
                'code' => '<iframe src="http://slides.com/alexwalker/responsive-svg/embed" width="576" height="420" style="border:none" frameborder="0" allowTransparency="true"></iframe>',
                'providerName' => 'Slides',
                'providerUrl' => 'http://slides.com',
            ]
        );
    }
}
