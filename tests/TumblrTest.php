<?php

namespace Embed\Tests;

class TumblrTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://he-who-photographs-rather-ok.tumblr.com/post/165326273724',
            [
                'url' => 'http://he-who-photographs-rather-ok.tumblr.com/post/165326273724',
                'authorName' => 'He-who-photographs-rather-OK',
                'authorUrl' => 'http://he-who-photographs-rather-ok.tumblr.com/',
                'type' => 'rich',
            ]
        );
    }
}
