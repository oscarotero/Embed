<?php

namespace Embed\Tests;

class HtmlProviderTest extends AbstractTestCase
{
    public function testAllowExternalImages()
    {
        $this->assertEmbed(
            'http://www.brothers-brick.com/2016/04/06/stunning-lego-darth-vader-mask-cleverly-hides-scenes-from-star-wars/',
            [
                'image' => 'https://i1.wp.com/farm2.staticflickr.com/1629/25975785880_114d1bce41_z.jpg?resize=625%2C416&ssl=1',
            ], [
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
                'image' => '',
            ], [
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
                'image' => 'https://i1.wp.com/farm2.staticflickr.com/1629/25975785880_114d1bce41_z.jpg?resize=625%2C416&ssl=1',
            ], [
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
