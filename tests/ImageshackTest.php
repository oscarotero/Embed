<?php

class ImageshackTest extends TestCaseBase
{
    public function testImageShack()
    {
        $this->assertEmbed(
            'https://imageshack.com/i/f0KQQN7Uj',
            [
                'title' => '.',
                'image' => 'http://imageshack.com/scaled/medium/540/KQQN7U.jpg',
                'imageWidth' => 236,
                'imageHeight' => 354,
                'type' => 'photo',
                'providerName' => 'ImageShack',
                'authorName' => 'ToddGilbert',
            ]
        );
    }
}
