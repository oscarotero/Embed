<?php

class ThematicTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.thematic.co/stories/9m3-the-road-to-aberdeen',
            [
                'title' => 'the Road to Aberdeen',
                'width' => 600,
                'height' => 300,
                'type' => 'rich',
                'code' => '<iframe src="http://www.thematic.co/embed/9m3-the-road-to-aberdeen" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:300px;"></iframe>',
            ]
        );
    }
}
