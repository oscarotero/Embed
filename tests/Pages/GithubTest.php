<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class GithubTest extends AbstractTestCase
{
    public function testGist()
    {
        $this->assertEmbed(
            'https://gist.github.com/oscarotero/7749998',
            [
                'title' => 'Git-cheatsheet.sh',
                'providerName' => 'Gist',
                'publishedTime' => '2013-12-02T14:10:20.000Z',
                'authorName' => 'oscarotero',
                'authorUrl' => 'https://github.com/oscarotero',
                'code' => true,
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
                'providerName' => 'GitHub',
            ]
        );
    }
}
