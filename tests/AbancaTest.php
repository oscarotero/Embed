<?php

namespace Embed\Tests;

class AbancaTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.abanca.com/gl',
            [
                'linkedData' => [
                    (object) [
                        '@context' => 'http://schema.org',
                        '@type' => 'Organization',
                        'name' => '',
                        'url' => '//www.abanca.com',
                        'logo' => '//www.abanca.com/img/logo-social.jpg',
                        'sameAs' => [],
                        'contactPoint' => [
                            (object) [
                                '@type' => 'ContactPoint',
                                'telephone' => '-',
                                'contactType' => 'customer service',
                            ],
                        ],
                    ],
                ],
            ]
        );
    }
}
