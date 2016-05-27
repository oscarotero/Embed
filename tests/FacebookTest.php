<?php

class FacebookTest extends TestCaseBase
{
    public function testPermalink()
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

    public function testCompanyPage()
    {
        $this->assertEmbed(
            'https://www.facebook.com/TheIndependentOnline/posts/10153659888571636',
            [
                'title' => 'The Independent - Best. News. Ever. | Facebook',
                'width' => 552,
                'code' => true,
                'type' => 'rich',
            ]
        );
    }
}
