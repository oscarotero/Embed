<?php

class HtmlProviderTest extends TestCaseBase
{
    public function testAllowExternalImages()
    {
        $this->assertEmbed(
            'http://www.brothers-brick.com/2016/04/06/stunning-lego-darth-vader-mask-cleverly-hides-scenes-from-star-wars/',
            [
                'image' => 'http://i0.wp.com/farm2.staticflickr.com/1458/25975786430_c69776287e_z.jpg?resize=625%2C495&ssl=1',
            ], [
                'providers' => [
                    'html' => [
                        'externalImages' => true,
                    ],
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
                'providers' => [
                    'html' => [
                        'externalImages' => false,
                    ],
                ],
            ]
        );
    }

    public function testAllowSomeExternalImages()
    {
        $this->assertEmbed(
            'http://www.brothers-brick.com/2016/04/06/stunning-lego-darth-vader-mask-cleverly-hides-scenes-from-star-wars/',
            [
                'image' => 'http://i0.wp.com/farm2.staticflickr.com/1458/25975786430_c69776287e_z.jpg?resize=625%2C495&ssl=1',
            ], [
                'providers' => [
                    'html' => [
                        'externalImages' => [
                            '*.staticflickr.com/*',
                            '*.flickr.com/*',
                        ],
                    ],
                ],
            ]
        );
    }
}
