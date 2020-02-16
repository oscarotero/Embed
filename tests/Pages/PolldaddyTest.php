<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class PolldaddyTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://polldaddy.com/poll/7012505/',
            [
                'title' => 'Which design do you prefer?',
                'description' => 'Poll Answers: Option #1, Option #2,',
                'code' => '<script type="text/javascript" charset="utf-8" src="https://secure.polldaddy.com/p/7012505.js"></script><noscript><iframe src="https://poll.fm/7012505/embed" frameborder="0" class="cs-iframe-embed"></iframe></noscript>',
                'providerName' => 'Crowdsignal',
            ]
        );
    }
}
