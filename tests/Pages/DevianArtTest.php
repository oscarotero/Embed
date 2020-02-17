<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class DevianArtTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.deviantart.com/art/Misty-510056679',
            [
                'title' => 'Misty',
            ]
        );
    }

    public function testTwo()
    {
        $this->assertEmbed(
            'http://pachunka.deviantart.com/art/Cope-145564099',
            [
                'title' => 'Cope',
                'authorName' => 'pachunka',
            ]
        );
    }
}
