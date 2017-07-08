<?php

namespace Embed\Tests;

class AolTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.aol.com/video/view/pile-of-recovering-foster-kittens-is-purrfect/595fe75985eb42109b69bedb/',
            [
                'title' => 'Pile of Recovering Foster Kittens Is Purrfect',
                'description' => "Holly Brookhouser has been fostering animals for two years. During that time, she’s been able to take care of 32 kittens. And, they just love being together!",
                'type' => 'link',
                'providerName' => 'AOL.com',
            ]
        );
    }
}
