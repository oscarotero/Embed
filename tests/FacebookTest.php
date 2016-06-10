<?php

class FacebookTest extends TestCaseBase
{
    public function testPermalink()
    {
        $this->assertEmbed(
            'https://www.facebook.co/permalink.php?story_fbid=827163017327807&id=149460691764713',
            [
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
                'width' => 552,
                'code' => true,
                'type' => 'rich',
            ]
        );
    }

    public function testVideo()
    {
        $this->assertEmbed(
            'https://www.facebook.com/acolono/videos/10154107990797381/',
            [
                'width' => 500,
                'code' => true,
                'type' => 'video',
            ]
        );
    }
}
