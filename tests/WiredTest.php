<?php

namespace Embed\Tests;

class WiredTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.wired.com/?p=2064839',
            [
                'title' => 'Review: Yi 4K Action Camera',
                'description' => "For nearly two years GoPro’s Hero4 Black has been the standard-bearer for action cameras. But there's a new contender.",
                'imageWidth' => 2680,
                'imageHeight' => 1507,
                'type' => 'rich',
                'code' => true,
            ]
        );
    }
}
