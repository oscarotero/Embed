<?php

class MovimTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://nl.movim.eu/?node/blabla.movim.eu/random/1fb06a3cc05c4490bf659c227b39a9aa',
            [
                'title' => 'Paris Attacks, cat not giving a fuck',
                'url' => 'https://nl.movim.eu/?node/blabla.movim.eu/random/1fb06a3cc05c4490bf659c227b39a9aa',
                'description' => 'Can you find the cat?',
                'image' => 'http://hugelolcdn.com/i700/361973.jpg',
            ]
        );
    }
}
