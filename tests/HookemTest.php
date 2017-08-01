<?php

namespace Embed\Tests;

/**
 * @link https://github.com/oscarotero/Embed/issues/145
 */
class HookemTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.hookem.com/story/texas-shortstop-joe-baker-arrested-public-intoxication/',
            [
                'title' => 'Texas shortstop Joe Baker was arrested for public intoxication',
                'image' => 'http://www.hookemplus.com/wp-content/uploads/2016/04/SSS-TexasBaseball-12.jpg',
            ]
        );
    }
}
