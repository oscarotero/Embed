<?php
class ImagesBlacklistTest extends PHPUnit_Framework_TestCase
{
    public function testPlainText()
    {
        $info = Embed\Embed::create('http://www.lopinion.fr/24-mars-2015/cartes-chance-sont-epuisees-22609', [
            'adapter'       => [
                'config'        => [
                    'imagesBlacklist' => [
                        'http://www.lopinion.fr/sites/nb.com/files/2015/01/logo-o-default_0.png?p',
                    ],
                ],
            ],
            'providers'     => [
                'html'          => [
                    'maxImages' => 0,
                ],
            ]
        ]);

        $this->assertNull($info->image);
    }

    public function testPlainUrlMatch()
    {
        $info = Embed\Embed::create('http://www.lopinion.fr/24-mars-2015/cartes-chance-sont-epuisees-22609', [
            'adapter'       => [
                'config'        => [
                    'imagesBlacklist' => [
                        '*/logo-o-default_0.png*',
                    ],
                ],
            ],
            'providers'     => [
                'html'          => [
                    'maxImages' => 0,
                ],
            ]
        ]);

        $this->assertNull($info->image);
    }

    public function testAuthorizedImage()
    {
        $info = Embed\Embed::create('http://www.lopinion.fr/24-mars-2015/jeunes-restent-angle-mort-politiques-publiques-22607', [
            'adapter'       => [
                'config'        => [
                    'imagesBlacklist' => [
                        '*/logo-o-default_0.png*',
                    ],
                ],
            ],
            'providers'     => [
                'html'          => [
                    'maxImages' => 0,
                ],
            ]
        ]);

        $this->assertNotNull($info->image);
    }
}
