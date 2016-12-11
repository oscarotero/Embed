<?php

namespace Embed\Tests;

class N500Test extends AbstractTestCase
{
    public function testPhoto()
    {
        $this->assertEmbed(
            'https://500px.com/photo/138251239/taganay-park-by-daniel-kordan',
            [
                'title' => 'Taganay park by Daniel Kordan',
                'image' => 'https://drscdn.500px.org/photo/138251239/m%3D900/70e5e5bfded84619fc86ac901dab18a4',
                'imageWidth' => 900,
                'imageHeight' => 600,
                'authorName' => 'Kordan',
                'type' => 'photo',
            ]
        );
    }
}
