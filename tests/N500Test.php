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
                'image' => 'https://drscdn.500px.org/photo/138251239/m%3D900/v2?webp=true&sig=bd0aadcd5f05638f74eb4dd1ac722495a46136aeadc231b5967ddcda799437ae',
                'imageWidth' => 900,
                'imageHeight' => 600,
                'authorName' => 'Kordan',
                'type' => 'photo',
            ]
        );
    }
}
