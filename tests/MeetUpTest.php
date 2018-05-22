<?php

namespace Embed\Tests;

class MeetUpTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.meetup.com/es/GPUL-Labs/events/248885422/',
            [
                'title' => 'Introducción a Flutter',
                'description' => "jue., 24 may. 2018 19:00: Fernando Souto - MOBGENDesde que Google anunció en el MWC que Flutter entraba en oficialmente beta, el interés por esta plataforma se ha multiplicado.Flutter es un SDK en len",
                'imageWidth' => 600,
                'imageHeight' => 600,
                'type' => 'link',
            ]
        );
    }
}
