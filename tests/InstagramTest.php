<?php
class InstagramTest extends TestCaseBase
{
    public function testHttp()
    {
        $this->assertEmbed(
            'http://instagram.com/p/ySl7G9tO_q/',
            [
                'title' => 'Se va llenando el lugar donde Tsipras dará su mitin. Aún pendientes de si Syriza logra la mayoría absoluta, pero ya seguros de la victoria de la izquierda.',
                'imageWidth' => 640,
                'imageHeight' => 640,
                'type' => 'rich',
                'authorName' => 'agarzoniu',
                'authorUrl' => 'https://instagram.com/agarzoniu',
                'providerName' => 'Instagram',
            ]
        );
    }

    public function testHttps()
    {
        $this->assertEmbed(
            'https://instagram.com/p/ySl7G9tO_q/',
            [
                'title' => 'Se va llenando el lugar donde Tsipras dará su mitin. Aún pendientes de si Syriza logra la mayoría absoluta, pero ya seguros de la victoria de la izquierda.',
                'imageWidth' => 640,
                'imageHeight' => 640,
                'type' => 'rich',
                'authorName' => 'agarzoniu',
                'authorUrl' => 'https://instagram.com/agarzoniu',
                'providerName' => 'Instagram',
            ]
        );
    }
}
