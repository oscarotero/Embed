<?php

namespace Embed\Tests;

class HtmlProviderTest extends AbstractTestCase
{
    public function testAllowExternalImages()
    {
        $this->assertEmbed(
            'http://www.brothers-brick.com/2016/04/06/stunning-lego-darth-vader-mask-cleverly-hides-scenes-from-star-wars/',
            [
                'images' => 6,
            ],
            [
                'html' => [
                    'external_images' => true,
                ],
            ]
        );
    }

    public function testNotAllowExternalImages()
    {
        $this->assertEmbed(
            'http://www.brothers-brick.com/2016/04/06/stunning-lego-darth-vader-mask-cleverly-hides-scenes-from-star-wars/',
            [
                'images' => 2,
            ],
            [
                'html' => [
                    'external_images' => false,
                ],
            ]
        );
    }

    public function testAllowSomeExternalImages()
    {
        $this->assertEmbed(
            'http://www.brothers-brick.com/2016/04/06/stunning-lego-darth-vader-mask-cleverly-hides-scenes-from-star-wars/',
            [
                'images' => 4,
            ],
            [
                'html' => [
                    'external_images' => [
                        '*.staticflickr.com/*',
                        '*.flickr.com/*',
                    ],
                ],
            ]
        );
    }
}
