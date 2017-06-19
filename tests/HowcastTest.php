<?php

namespace Embed\Tests;

class HowcastTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.howcast.com/videos/512882-How-to-Make-an-Alabama-Slammer-Shots-Recipes',
            [
                'title' => 'How to Make an Alabama Slammer',
                'image' => 'http://98441.cdx.c.ooyala.com/8zcDVjczr8uRcjUmcmfImbxKI6OP6cFf/promo251669269',
                'code' => '<script height="422px" width="750px" src="http://player.ooyala.com/iframe.js#ec=8zcDVjczr8uRcjUmcmfImbxKI6OP6cFf&pbid=5d8891bc445c4156a75933fbf4bcfc9a"></script>',
                'type' => 'rich',
            ]
        );
    }
}
