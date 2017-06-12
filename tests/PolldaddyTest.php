<?php

namespace Embed\Tests;

class PolldaddyTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://polldaddy.com/poll/7012505/',
            [
                'title' => 'Which design do you prefer?',
                'description' => 'Poll Answers: Option #1, Option #2,',
                'code' => '<script type="text/javascript" charset="utf-8" src="https://secure.polldaddy.com/p/7012505.js"></script><noscript><a href="https://polldaddy.com/poll/7012505/">Which design do you prefer?</a></noscript>',
                'type' => 'rich',
                'providerName' => 'Polldaddy',
            ]
        );
    }
}
