<?php

namespace Embed\Tests;

class MeetUpTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.meetup.com/SetPay-Talks/events/219650150/',
            [
                'title' => 'Docker, from zero to hero with Carlos Sánchez',
                'description' => "Inauguramos las charlas de SetPay con uno de los temas más de moda en 2014, Docker.\n\n Docker es una herramienta para que desarrolladores y administradores de sistemas construyan, desplieguen y ejecuten",
                'imageWidth' => 2400,
                'imageHeight' => 1260,
                'type' => 'rich',
            ]
        );
    }
}
