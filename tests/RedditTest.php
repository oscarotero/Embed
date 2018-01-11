<?php

namespace Embed\Tests;

class RedditTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.reddit.com/r/investing/comments/7pfpeq/buffett_on_cyrptocurrencies_i_can_say_almost_with/',
            [
                'title' => "Buffett on cyrptocurrencies: 'I can say almost with certainty that they will come to a bad ending'",
                'type' => 'rich',
                'authorName' => 'dennisrieves',
                'providerName' => 'reddit',
            ]
        );
    }
}
