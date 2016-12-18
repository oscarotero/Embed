<?php

namespace Embed\Tests;

class PhotoBucketTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://media.photobucket.com/user/Ignwar/media/Album%20Deserts/MoonriseMonumentValleyUtah.jpg.html?filters[term]=sunsets&filters[primary]=images',
            [
                'title' => 'Deserts',
                'description' => "I P uploaded this image to 'Album Deserts'.  See the album on Photobucket.",
                'imageWidth' => 1600,
                'imageHeight' => 1200,
                'type' => 'link',
            ]
        );
    }
}
