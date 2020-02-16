<?php
declare(strict_types = 1);

namespace Embed\Tests;

class ImagesBlacklistTest extends AbstractTestCase
{
    public function testPlainText()
    {
        $this->assertEmbed(
            'https://alistapart.com/article/the-rich-typefaces-get-richer',
            [
                'image' => 'https://alistapart.com/wp-content/uploads/2019/03/cropped-icon_navigation-laurel-512.jpg',
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
                'image' => 'https://alistapart.com/wp-content/uploads/2019/03/cropped-icon_navigation-laurel-512.jpg',
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
                'image' => 'https://alistapart.com/wp-content/uploads/2019/03/cropped-icon_navigation-laurel-512.jpg',
            ],
            [
                'images_blacklist' => [
                    '*/photos/*',
                ],
            ]
        );
    }
}
