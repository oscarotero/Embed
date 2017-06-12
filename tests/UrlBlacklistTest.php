<?php

namespace Embed\Tests;

class UrlBlacklistTest extends AbstractTestCase
{
    public function testPlainText()
    {
        $this->assertEmbed(
            'https://www.glomdalen.no/skarnes',
            [
                'url' => 'https://www.glomdalen.no/skarnes',
            ],
            [
                'url_blacklist' => [
                    'ns_campaign',
                    'ns_source',
                    'utm_campaign',
                    'utm_medium',
                    'utm_source',
                ],
            ]
        );
    }
}
