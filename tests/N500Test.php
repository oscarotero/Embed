<?php

class N500Test extends TestCaseBase
{
    public function testPhoto()
    {
        $this->assertEmbed(
            'https://500px.com/photo/127505793/nude-girl-retro-by-david-dubnitskiy',
            [
                'imageWidth' => 280,
                'image' => 'https://drscdn.500px.org/photo/127505793/w%3D280_h%3D280/c415195ae6156c9ba2a3db37130c22be?v=2',
                'imageHeight' => 280,
                'authorName' => 'David Dubnitskiy',
                'type' => 'photo',
            ]
        );
    }
}
