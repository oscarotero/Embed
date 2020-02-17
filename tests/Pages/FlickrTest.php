<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class FlickrTest extends AbstractTestCase
{
    public function testSets()
    {
        $this->assertEmbed(
            'https://www.flickr.com/photos/desescribir/sets/72157650686499888',
            [
                'code' => '<a data-flickr-embed="true" href="https://www.flickr.com/photos/desescribir/sets/72157650686499888" title="Günther Förg. Verfolgen Malerei / Fundación Luís Seoane by desescribir, on Flickr"><img src="https://live.staticflickr.com/8572/16055522574_ce77fde14e_b.jpg" width="1024" height="680" alt="Günther Förg. Verfolgen Malerei / Fundación Luís Seoane"></a><script async src="https://embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>',
                'license' => 'https://creativecommons.org/licenses/by-nc-nd/2.0/',
            ]
        );
    }

    public function testProfile()
    {
        $this->assertEmbed(
            'https://www.flickr.com/photos/desescribir',
            [
                'code' => '<iframe src="https://www.flickr.com/photos/desescribir/player" width="640" height="425" style="border:none" frameborder="0" allowTransparency="true"></iframe>',
            ]
        );
    }
}
