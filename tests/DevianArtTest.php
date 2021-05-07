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
                'description' => '',
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
                'description' => '',
                'imageWidth' => 448,
                'imageHeight' => 672,
                'type' => 'link',
                'authorName' => 'pachunka',
            ]
        );
    }
}
