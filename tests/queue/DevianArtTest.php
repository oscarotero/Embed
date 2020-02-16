<?php

namespace Embed\Tests;

class DevianArtTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.deviantart.com/art/Misty-510056679',
            [
                'title' => 'Misty',
                'description' => 'Face Book llOnline Store ll Tumblr ll Help support me on Patreon and get special perks<3llArtstation I used to watch pokemon when I was younger, and it was  the one...',
                'imageWidth' => 695,
                'imageHeight' => 900,
                'type' => 'link',
            ]
        );
    }

    public function testTwo()
    {
        $this->assertEmbed(
            'http://pachunka.deviantart.com/art/Cope-145564099',
            [
                'title' => 'Cope',
                'description' => '$randomduck for president, 2012. There may or may not be some irony surrounding this image.',
                'imageWidth' => 448,
                'imageHeight' => 672,
                'type' => 'link',
                'authorName' => 'Pachunka',
            ]
        );
    }
}
