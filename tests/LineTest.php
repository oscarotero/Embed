<?php
class LineTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://line.do/embed/8oq/vertical',
            [
                'title' => 'PHP Evolution',
                'type' => 'rich',
                'code' => '<iframe src="https://line.do/embed/8oq/vertical" frameborder="0" allowTransparency="true" style="border:1px solid #e7e7e7;width:640px;height:640px;"></iframe>',
                'width' => 640,
                'height' => 640,
                'providerName' => 'Line.do',
                'providerUrl' => 'https://line.do',
            ]
        );
    }
}
