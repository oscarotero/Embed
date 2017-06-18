<?php

namespace Embed\Tests;

use Embed\Embed;

class UrlBlacklistTest extends AbstractTestCase
{
    public function testVerifyUnwanted()
    {
        // If this test fails, the two tests down under is unreliable
        $this->assertEmbed(
            'http://glomdalen.no/skarnes',
            [
                'url' => 'http://www.glomdalen.no?ns_campaign=frontpage&ns_mchannel=recommend_button&ns_source=facebook&ns_linkname=facebook&ns_fee=0',
            ],
            [
                'url_blacklist' => null,
            ]
        );
    }

    public function testCustomRegex()
    {
        $this->assertEmbed(
            'http://glomdalen.no/skarnes',
            [
                'url' => 'https://www.glomdalen.no/skarnes',
            ],
            [
                'url_blacklist' => [
                    '?&ns_campaign=*',
                    '?&ns_source=*',
                    '?&utm_campaign=*',
                    '?&utm_medium=*',
                    '?&utm_source=*',
                ],
            ]
        );
    }

    public function testDefaultConfig()
    {
        // This test is verified working using the above test
        $this->assertEmbed(
            'http://glomdalen.no/skarnes',
            [
                'url' => 'https://www.glomdalen.no/skarnes',
            ],
            Embed::$default_config
        );
    }
}
