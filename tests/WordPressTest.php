<?php
class WordPressTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://wordpress.tv/2013/09/06/dave-ross-optimize-image-files-like-a-pro/',
            [
                'title' => 'Dave Ross: Optimize Image Files Like a Pro',
                'imageWidth' => 400,
                'imageHeight' => 224,
                'type' => 'video',
                'authorName' => '@WordPressTV',
                'providerName' => 'WordPress.tv',
                'providerUrl' => 'http://wordpress.tv',
            ]
        );
    }
}
