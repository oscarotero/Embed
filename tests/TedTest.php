<?php

namespace Embed\Tests;

class TedTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.ted.com/talks/george_monbiot_for_more_wonder_rewild_the_world?language=en#t-689901',
            [
                'title' => 'George Monbiot: For more wonder, rewild the world',
                'description' => "Wolves were once native to the US' Yellowstone National Park -- until hunting wiped them out. But when, in 1995, the wolves began to come back (thanks to an aggressive management program), something interesting happened: the rest of the park began to find a new, more healthful balance. In a bold thought experiment, George Monbiot imagines a wilder world in which humans work to restore the complex, lost natural food chains that once surrounded us.",
                'imageWidth' => 240,
                'imageHeight' => 180,
                'code' => '<iframe src="https://embed.ted.com/talks/george_monbiot_for_more_wonder_rewild_the_world" width="560" height="315" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>',
                'type' => 'video',
                'authorName' => 'George Monbiot',
                'authorUrl' => 'https://www.ted.com/speakers/george_monbiot',
                'providerName' => 'TED',
            ]
        );
    }
}
