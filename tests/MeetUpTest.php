<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class MeetUpTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.meetup.com/SetPay-Talks/events/219650150/');

        $this->assertEquals($info->title, 'Docker, from zero to hero with Carlos Sánchez');
        $this->assertEquals($info->description, "Inauguramos las charlas de SetPay con uno de los temas más de moda en 2014, Docker.\n\n Docker es una herramienta para que desarrolladores y administradores de sistemas construyan, desplieguen y ejecute");
        $this->assertEquals($info->imageWidth, 567);
        $this->assertEquals($info->imageHeight, 392);
        $this->assertEquals($info->type, 'rich');
    }
}
