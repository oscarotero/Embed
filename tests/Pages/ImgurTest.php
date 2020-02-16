<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class ImgurTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://i.imgur.com/X6rkCc5.jpg',
            [
                'providerName' => 'Imgur',
                'code' => '<blockquote class="imgur-embed-pub" lang="en" data-id="X6rkCc5"><a href="https://imgur.com/X6rkCc5">Picture of a Mountain Gorilla right before he punched the photographer</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>'
            ]
        );
    }
}
