<?php

namespace Embed\Tests;

class ThematicTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.thematic.co/stories/9m3-the-road-to-aberdeen',
            [
                'title' => 'the Road to Aberdeen',
                'width' => 400,
                'height' => 200,
                'type' => 'photo',
                'code' => '<iframe width="400" height="200" src="http://www.thematic.co/embed/9m3-the-road-to-aberdeen" allowtransparency="true" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
            ]
        );
    }
}
