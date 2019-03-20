<?php

namespace Embed\Tests;

class CatizzTest extends AbstractTestCase
{
    public function testSimple()
    {
        $this->assertEmbed(
            'https://www.catizz.com/medias/common/chat-savannah.jpg',
            [
                'url' => 'https://www.catizz.com/medias/common/chat-savannah.jpg',
                'code' => '<img src="https://www.catizz.com/medias/common/chat-savannah.jpg" alt="Remote file" width="1633" height="1164">',
                'imageWidth' => 1633,
                'imageHeight' => 1164,
                'providerName' => 'catizz',
            ]
        );
    }

    public function testWithSpaces()
    {
        $urls = [
            'https://www.catizz.com/medias/common/miaulement chat .jpg',
            'https://www.catizz.com/medias/common/miaulement%20chat%20.jpg',
        ];

        foreach ($urls as $url) {
            $this->assertEmbed(
                $url,
                [
                    'url' => 'https://www.catizz.com/medias/common/miaulement%20chat%20.jpg',
                    'code' => '<img src="https://www.catizz.com/medias/common/miaulement%20chat%20.jpg" alt="Remote file" width="1688" height="1125">',
                    'imageWidth' => 1688,
                    'imageHeight' => 1125,
                    'providerName' => 'catizz',
                ]
            );
        }
    }

    public function testWithSpaceAndBraces()
    {
        $urls = [
            'https://www.catizz.com/medias/common/accessoires-chat-canva (1).jpg',
            'https://www.catizz.com/medias/common/accessoires-chat-canva%20(1).jpg',
            'https://www.catizz.com/medias/common/accessoires-chat-canva %281).jpg',
            'https://www.catizz.com/medias/common/accessoires-chat-canva%20%281%29.jpg',
        ];

        foreach ($urls as $url) {
            $this->assertEmbed(
                $url,
                [
                    'url' => 'https://www.catizz.com/medias/common/accessoires-chat-canva%20%281%29.jpg',
                    'code' => '<img src="https://www.catizz.com/medias/common/accessoires-chat-canva%20%281%29.jpg" alt="Remote file" width="600" height="338">',
                    'imageWidth' => 600,
                    'imageHeight' => 338,
                    'providerName' => 'catizz',
                ]
            );
        }
    }
}
