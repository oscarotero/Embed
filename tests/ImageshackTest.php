<?php

namespace Embed\Tests;

class ImageshackTest extends AbstractTestCase
{
    public function testImageShack()
    {
        $this->assertEmbed(
            'https://imageshack.com/i/f0KQQN7Uj',
            [
                'title' => '.',
                'image' => 'http://imagizer.imageshack.us/scaled/medium/540/KQQN7U.jpg',
                'imageWidth' => 236,
                'imageHeight' => 354,
                'type' => 'link',
                'providerName' => 'ImageShack',
                'authorName' => 'ToddGilbert',
            ]
        );
    }
}
