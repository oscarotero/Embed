<?php

namespace Embed\Tests;

class LineTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://line.do/es/el-islam-y-al-andalus/7bb/vertical',
            [
                'title' => 'EL ISLAM Y AL-ANDALUS',
                'type' => 'rich',
                'code' => '<iframe src="https://line.do/embed/7bb/vertical" frameborder="0" allowTransparency="true" style="border:1px solid #e7e7e7;width:640px;height:640px;"></iframe>',
                'width' => 640,
                'height' => 640,
                'providerName' => 'Line.do',
                'providerUrl' => 'https://line.do',
            ]
        );
    }
}
