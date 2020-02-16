<?php
declare(strict_types = 1);

namespace Embed\Tests;

class N500Test extends AbstractTestCase
{
    public function testPhoto()
    {
        $this->assertEmbed(
            'https://500px.com/photo/138251239/taganay-park-by-daniel-kordan',
            [
                'title' => 'Taganay park by Daniel Kordan',
                'image' => 'https://drscdn.500px.org/photo/138251239/m%3D900/v2?sig=7489d4e3881772af5530f01b040e0d6f675e975f81173533a70d422d61919194',
                'imageWidth' => 900,
                'imageHeight' => 600,
                'authorName' => 'Kordan',
                'type' => 'photo',
            ]
        );
    }
}
