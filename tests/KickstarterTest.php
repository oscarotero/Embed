<?php

namespace Embed\Tests;

class KickstarterTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers',
            [
                'title' => 'Good Seed Craft Veggie Burgers',
                'description' => 'Nutrient-dense Real Food! Good Seed hemp patties transform the veggie burger with bold flavor blends & sprouted superfood ingredients.',
                'width' => 480,
                'height' => 270,
                'authorName' => 'Oliver Ponce and Erin Shotwell',
                'providerName' => 'Kickstarter',
            ]
        );
    }
}
