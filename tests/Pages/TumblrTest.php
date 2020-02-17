<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class TumblrTest extends AbstractTestCase
{
    /**
     * @group ignore
     */
    public function testOne()
    {
        $this->assertEmbed(
            'http://he-who-photographs-rather-ok.tumblr.com/post/165326273724',
            [
                'url' => 'https://he-who-photographs-rather-ok.tumblr.com/post/165326273724',
                'authorName' => 'He-who-photographs-rather-OK',
                'authorUrl' => 'https://he-who-photographs-rather-ok.tumblr.com/',
            ]
        );
    }
}
