<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class InstagramTest extends AbstractTestCase
{
    public function testHttp()
    {
        $this->assertEmbed(
            'http://instagram.com/p/ySl7G9tO_q/',
            [
                'title' => 'Se va llenando el lugar donde Tsipras dará su mitin. Aún pendientes de si Syriza logra la mayoría absoluta, pero ya seguros de la victoria de la izquierda.',
                'authorName' => 'agarzoniu',
                'authorUrl' => 'https://www.instagram.com/agarzoniu',
                'providerName' => 'Instagram',
            ]
        );
    }

    public function testHttps()
    {
        $this->assertEmbed(
            'https://www.instagram.com/p/ySl7G9tO_q/',
            [
                'title' => 'Se va llenando el lugar donde Tsipras dará su mitin. Aún pendientes de si Syriza logra la mayoría absoluta, pero ya seguros de la victoria de la izquierda.',
                'authorName' => 'agarzoniu',
                'authorUrl' => 'https://www.instagram.com/agarzoniu',
                'providerName' => 'Instagram',
            ]
        );
    }
}
