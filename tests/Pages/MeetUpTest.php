<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class MeetUpTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.meetup.com/es/GPUL-Labs/events/248885422/',
            [
                'title' => 'Introducción a Flutter',
                'description' => 'jue., 24 may. 2018 19:00: Fernando Souto - MOBGENDesde que Google anunció en el MWC que Flutter entraba en oficialmente beta, el interés por esta plataforma se ha multiplicado.Flutter es un SDK en len',
            ]
        );
    }
}
