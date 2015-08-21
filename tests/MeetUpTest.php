<?php
class MeetUpTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.meetup.com/SetPay-Talks/events/219650150/',
            [
                'title' => 'Docker, from zero to hero with Carlos Sánchez',
                'description' => "Inauguramos las charlas de SetPay con uno de los temas más de moda en 2014, Docker.\n\n Docker es una herramienta para que desarrolladores y administradores de sistemas construyan, desplieguen y ejecute",
                'imageWidth' => 567,
                'imageHeight' => 392,
                'type' => 'rich',
            ]
        );
    }
}
