<?php
class ImagesBlacklistTest extends TestCaseBase
{
    public function testPlainText()
    {
        $this->assertEmbed(
            'https://github.com/oscarotero/Embed',
            [
                'image' => 'https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif',
            ], [
                'adapter' => [
                    'config' => [
                        'imagesBlacklist' => [
                            'https://avatars1.githubusercontent.com/u/377873?v=3&s=400',
                        ],
                    ],
                ]
            ]
        );
    }

    public function testPlainUrlMatch()
    {
        $this->assertEmbed(
            'https://github.com/oscarotero/Embed',
            [
                'image' => 'https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif',
            ], [
                'adapter' => [
                    'config' => [
                        'imagesBlacklist' => [
                            '*.githubusercontent.com*',
                        ],
                    ],
                ]
            ]
        );
    }

    public function testAuthorizedImage()
    {
        $this->assertEmbed(
            'https://github.com/oscarotero/Embed',
            [
                'image' => 'https://avatars1.githubusercontent.com/u/377873?v=3&s=400',
            ], [
                'adapter' => [
                    'config' => [
                        'imagesBlacklist' => [
                            '*/octocat-spinner-*',
                        ],
                    ],
                ]
            ]
        );
    }
}
