<?php
class InstagramTest extends TestCaseBase
{
    public function testHttp()
    {
        $info = $this->getInfo('http://instagram.com/p/ySl7G9tO_q/');

        $this->assertString($info->title, 'Se va llenando el lugar donde Tsipras dará su mitin. Aún pendientes de si Syriza logra la mayoría absoluta, pero ya seguros de la victoria de la izquierda.');
        $this->assertString($info->imageWidth, 640);
        $this->assertString($info->imageHeight, 640);
        $this->assertString($info->type, 'rich');
        $this->assertString($info->authorName, 'agarzoniu');
        $this->assertString($info->authorUrl, 'https://instagram.com/agarzoniu');
        $this->assertString($info->providerName, 'Instagram');
    }

    public function testHttps()
    {
        $info = $this->getInfo('https://instagram.com/p/ySl7G9tO_q/');

        $this->assertString($info->title, 'Se va llenando el lugar donde Tsipras dará su mitin. Aún pendientes de si Syriza logra la mayoría absoluta, pero ya seguros de la victoria de la izquierda.');
        $this->assertString($info->imageWidth, 640);
        $this->assertString($info->imageHeight, 640);
        $this->assertString($info->type, 'rich');
        $this->assertString($info->authorName, 'agarzoniu');
        $this->assertString($info->authorUrl, 'https://instagram.com/agarzoniu');
        $this->assertString($info->providerName, 'Instagram');
    }
}
