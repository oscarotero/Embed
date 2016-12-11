<?php

namespace Embed\Tests;

class SlidesTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://slides.com/alexwalker/responsive-svg/',
            [
                'title' => 'responsive-svg by Alex Walker',
                'type' => 'rich',
                'code' => '<iframe src="http://slides.com/alexwalker/responsive-svg/embed" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:576px;height:420px;"></iframe>',
                'width' => 576,
                'height' => 420,
                'providerName' => 'Slides',
                'providerUrl' => 'http://slides.com',
            ]
        );
    }
}
