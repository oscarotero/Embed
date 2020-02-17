<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class FacebookTest extends AbstractTestCase
{
    public function testPermalink()
    {
        $this->assertEmbed(
            'https://www.facebook.com/permalink.php?story_fbid=827163017327807&id=149460691764713',
            [
                'title' => 'Aquí vos deixamos unhas imaxes da nosa... - DAG, Asociación Galega de Deseño | Facebook',
                'code' => true,
            ]
        );
    }

    public function testVideo()
    {
        $this->assertEmbed(
            'https://www.facebook.com/acolono/videos/10154107990797381/',
            [
                'title' => 'Acolono GmbH - Eindrücke vom gestrigen Drupal Austria...',
                'code' => true,
            ]
        );
    }
}
