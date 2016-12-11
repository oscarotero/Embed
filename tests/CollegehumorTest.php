<?php

namespace Embed\Tests;

class CollegehumorTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.collegehumor.com/video/6974337/gluten-free-duck',
            [
                'title' => 'Gluten Free Duck',
                'width' => 610,
                'height' => 343,
                'code' => '<iframe src="http://www.collegehumor.com/e/6974337" width="610" height="343" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>',
                'type' => 'video',
                'providerName' => 'CollegeHumor',
            ]
        );
    }
}
