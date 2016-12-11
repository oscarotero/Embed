<?php

namespace Embed\Tests;

class WordPressTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/',
            [
                'title' => 'Dave Ross: Optimize Image Files Like a Pro',
                'imageWidth' => 400,
                'imageHeight' => 224,
                'providerUrl' => 'http://wordpress.tv',
            ]
        );
    }
}
