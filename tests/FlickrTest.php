<?php

class FlickrTest extends TestCaseBase
{
    public function testSets()
    {
        $this->assertEmbed(
            'https://www.flickr.com/photos/desescribir/sets/72157650686499888',
            [
                'imageWidth' => 1024,
                'imageHeight' => 680,
                'code' => '<a data-flickr-embed="true" href="https://www.flickr.com/photos/desescribir/sets/72157650686499888" title="Günther Förg. Verfolgen Malerei / Fundación Luís Seoane by desescribir, on Flickr"><img src="https://farm9.staticflickr.com/8572/16055522574_ce77fde14e_b.jpg" width="1024" height="680" alt="Günther Förg. Verfolgen Malerei / Fundación Luís Seoane"></a><script async src="https://embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>',
                'type' => 'rich',
                'license' => 'https://creativecommons.org/licenses/by-nc-nd/2.0/',
            ]
        );
    }

    public function testProfile()
    {
        $this->assertEmbed(
            'https://www.flickr.com/photos/desescribir',
            [
                'imageWidth' => 2048,
                'imageHeight' => 1454,
                'code' => '<iframe src="https://www.flickr.com/photos/desescribir/player" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:600px;height:400px;"></iframe>',
                'type' => 'rich',
            ]
        );
    }
}
