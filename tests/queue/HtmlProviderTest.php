<?php

namespace Embed\Tests;

class HtmlProviderTest extends AbstractTestCase
{
    /**
     * @group ignore
     */
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
                'images' => 1,
            ]
        );
    }

    public function testAllowSomeExternalImages()
    {
        $this->assertEmbed(
            'http://www.brothers-brick.com/2016/04/06/stunning-lego-darth-vader-mask-cleverly-hides-scenes-from-star-wars/',
            [
                'images' => 3,
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
