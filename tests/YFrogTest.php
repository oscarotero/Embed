<?php

class YFrogTest extends TestCaseBase
{
    //yfrog seems shutdown
    public function noTestOne()
    {
        $this->assertEmbed(
            'http://a.yfrog.com/img593/8436/snso.jpg',
            [
                'title' => 'http://a.yfrog.com/img593/8436/snso.jpg',
                'imageWidth' => 4928,
                'imageHeight' => 3264,
                'type' => 'photo',
                'providerName' => 'yFrog',
            ]
        );
    }

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
