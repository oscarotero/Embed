<?php

namespace Embed\Tests;

class ImagesBlacklistTest extends AbstractTestCase
{
    public function testPlainText()
    {
        $this->assertEmbed(
            'https://alistapart.com/article/the-rich-typefaces-get-richer',
            [
                'image' => 'https://alistapart.com/d/_made/pix/authors/photos/shoaf-headshot_120_120_c1.jpg',
            ],
            [
                'images_blacklist' => [
                    'alistapart.com/components/assets/img/ala-logo-big.png',
                ],
            ]
        );
    }

    public function testPlainUrlMatch()
    {
        $this->assertEmbed(
            'https://alistapart.com/article/the-rich-typefaces-get-richer',
            [
                'image' => 'https://alistapart.com/d/_made/pix/authors/photos/shoaf-headshot_120_120_c1.jpg',
            ],
            [
                'images_blacklist' => [
                    '*-logo-*',
                ],
            ]
        );
    }

    public function testAuthorizedImage()
    {
        $this->assertEmbed(
            'https://alistapart.com/article/the-rich-typefaces-get-richer',
            [
                'image' => 'https://alistapart.com/components/assets/img/ala-logo-big.png',
            ],
            [
                'images_blacklist' => [
                    '*/photos/*',
                ],
            ]
        );
    }
}
