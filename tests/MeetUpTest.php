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
                'description' => "1/13, 6:00 PM: Inauguramos las charlas de SetPay con uno de los temas más de moda en 2014, Docker.Docker es una herramienta para que desarrolladores y administradores de sistemas construyan, despliegu",
                'imageWidth' => 2400,
                'imageHeight' => 1260,
                'type' => 'rich',
            ]
        );
    }
}
