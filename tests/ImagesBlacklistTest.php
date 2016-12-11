<?php

namespace Embed\Tests;

class ImagesBlacklistTest extends AbstractTestCase
{
    public function testPlainText()
    {
        $this->assertEmbed(
            'http://alistapart.com/article/the-rich-typefaces-get-richer',
            [
                'image' => 'http://alistapart.com/d/_made/pix/authors/photos/shoaf-headshot_120_120_c1.jpg',
            ], [
                'imagesBlacklist' => [
                    'http://alistapart.com/components/assets/img/ala-logo-big.png',
                ],
            ]
        );
    }

    public function testPlainUrlMatch()
    {
        $this->assertEmbed(
            'http://alistapart.com/article/the-rich-typefaces-get-richer',
            [
                'image' => 'http://alistapart.com/d/_made/pix/authors/photos/shoaf-headshot_120_120_c1.jpg',
            ], [
                'imagesBlacklist' => [
                    '*-logo-*',
                ],
            ]
        );
    }

    public function testAuthorizedImage()
    {
        $this->assertEmbed(
            'http://alistapart.com/article/the-rich-typefaces-get-richer',
            [
                'image' => 'http://alistapart.com/components/assets/img/ala-logo-big.png',
            ], [
                'imagesBlacklist' => [
                    '*/photos/*',
                ],
            ]
        );
    }
}
