<?php
class ImagesBlacklistTest extends PHPUnit_Framework_TestCase
{
    public function testPlainText()
    {
        $info = Embed\Embed::create('https://github.com/oscarotero/Embed', [
            'adapter'       => [
                'config'        => [
                    'imagesBlacklist' => [
                        'https://avatars1.githubusercontent.com/u/377873?v=3&s=400',
                    ],
                ],
            ]
        ]);

        $this->assertEquals('https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif', $info->image);
    }

    public function testPlainUrlMatch()
    {
        $info = Embed\Embed::create('https://github.com/oscarotero/Embed', [
            'adapter'       => [
                'config'        => [
                    'imagesBlacklist' => [
                        '*.githubusercontent.com*',
                    ],
                ],
            ]
        ]);

        $this->assertEquals('https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif', $info->image);
    }

    public function testAuthorizedImage()
    {
        $info = Embed\Embed::create('https://github.com/oscarotero/Embed', [
            'adapter'       => [
                'config'        => [
                    'imagesBlacklist' => [
                        '*/octocat-spinner-*',
                    ],
                ],
            ]
        ]);

        $this->assertEquals('https://avatars1.githubusercontent.com/u/377873?v=3&s=400', $info->image);
    }
}
