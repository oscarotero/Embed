<?php

namespace Embed\Tests;

class GithubTest extends AbstractTestCase
{
    public function testGist()
    {
        $this->assertEmbed(
            'https://gist.github.com/oscarotero/7749998',
            [
                'title' => 'Git-cheatsheet.sh',
                'imageWidth' => 400,
                'imageHeight' => 400,
                'type' => 'rich',
                'providerName' => 'Gist',
            ]
        );
    }

    public function testGeojson()
    {
        $this->assertEmbed(
            'https://github.com/benbalter/dc-wifi-social/blob/master/bars.geojson',
            [
                'title' => 'benbalter/dc-wifi-social',
                'code' => '<script src="https://embed.githubusercontent.com/view/geojson/benbalter/dc-wifi-social/master/bars.geojson"></script>',
                'type' => 'rich',
                'providerName' => 'GitHub',
            ]
        );
    }

    public function test3d()
    {
        $this->assertEmbed(
            'https://github.com/skalnik/secret-bear-clip/blob/master/stl/clip.stl',
            [
                'title' => 'skalnik/secret-bear-clip',
                'code' => '<script src="https://embed.githubusercontent.com/view/3d/skalnik/secret-bear-clip/master/stl/clip.stl"></script>',
                'type' => 'rich',
                'providerName' => 'GitHub',
            ]
        );
    }
}
