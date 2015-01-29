<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class InstagramTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://instagram.com/p/ySl7G9tO_q/');

        $this->assertEquals($info->title, 'Se va llenando el lugar donde Tsipras dará su mitin. Aún pendientes de si Syriza logra la mayoría absoluta, pero ya seguros de la victoria de la izquierda.');
        $this->assertEquals($info->imageWidth, 640);
        $this->assertEquals($info->imageHeight, 640);
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->authorName, 'agarzoniu');
        $this->assertEquals($info->authorUrl, 'http://instagram.com/agarzoniu');
        $this->assertEquals($info->providerName, 'Instagram');
    }
}
