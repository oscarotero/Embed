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

    public function testRedirect()
    {
        $this->assertEmbed(
            'https://t.umblr.com/redirect?z=https%3A%2F%2Fcm.engineering%2Fhow-to-test-accessibility-of-emails-b68fed03f5f4&t=YmJlOWJlMDE2MTBhNjgzMGQ3OWI4YjcyYTc3ZGVmODVlMjQxZWU0OCxEMHp1MXlSVg%3D%3D&b=t%3ABS0dIKxiGtP4rIANih2MqA&p=http%3A%2F%2Ftoday.uxdesign.cc%2Fpost%2F174967774408%2Fhow-to-test-accessibility-of-emails',
            [
                'title' => 'How to test accessibility of emails – Campaign Monitor Engineering',
                'url' => 'https://cm.engineering/how-to-test-accessibility-of-emails-b68fed03f5f4',
            ]
        );
    }
}
