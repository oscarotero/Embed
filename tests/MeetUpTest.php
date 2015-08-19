<?php
class MeetUpTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://www.meetup.com/SetPay-Talks/events/219650150/');

        $this->assertString($info->title, 'Docker, from zero to hero with Carlos Sánchez');
        $this->assertString($info->description, "Inauguramos las charlas de SetPay con uno de los temas más de moda en 2014, Docker.\n\n Docker es una herramienta para que desarrolladores y administradores de sistemas construyan, desplieguen y ejecute");
        $this->assertString($info->imageWidth, 567);
        $this->assertString($info->imageHeight, 392);
        $this->assertString($info->type, 'rich');
    }
}
