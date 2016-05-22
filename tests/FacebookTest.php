<?php

class FacebookTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.facebook.co/permalink.php?story_fbid=827163017327807&id=149460691764713',
            [
                'title' => 'Aquí vos deixamos unhas imaxes da nosa... - DAG, Asociación Galega de Deseñadores | Facebook',
                'width' => 552,
                'code' => true,
                'type' => 'rich',
            ]
        );
    }
}
