<?php

namespace Embed\Tests;

class YoutubeTest extends AbstractTestCase
{
    static private $expectedVideoInfo = [
        'title' => 'Noisy kittens waiting for dinner!',
        'imageWidth' => 480,
        'imageHeight' => 360,
        'type' => 'video',
        'authorName' => 'smshdchrb',
        'authorUrl' => 'https://www.youtube.com/user/smshdchrb',
        'providerName' => 'YouTube',
        'providerUrl' => 'https://www.youtube.com/',
        // `tags` are extracted by HTML provider from the page source, but
        // in countries with cookie consent laws a consent page is first
        // shown. The HTML provider tries to extract from the consent
        // page and fails. In other countries this should work.
        /*'tags' => [
            'kittens',
            'cats',
            'hungry',
            'cat',
            'baby',
            'eight',
            'weeks',
            'old',
            'noisy',
            'meow',
            'funny',
            'kitties',
            'feline',
            'dinner',
            'excited',
            'loud',
            'cute',
            'pet',
            'food',
            'time',
            'felix',
            'kitty',
            'catz',
            'lolcat',
            'kitten',
            'talking',
            'adorable',
            'climbing'
        ],*/
    ];

    public function testOne()
    {
        $this->assertEmbed(
            $url = 'http://www.youtube.com/watch?v=eiHXASgRTcA',
            array_merge(
                self::$expectedVideoInfo,
                ['url' => $url]
            )
        );
    }

    public function testShareUrl()
    {
        $this->assertEmbed(
            $url = 'http://youtu.be/eiHXASgRTcA',
            array_merge(
                self::$expectedVideoInfo,
                ['url' => $url]
            )
        );
    }

    public function testPlayList()
    {
        $this->assertEmbed(
            'https://www.youtube.com/playlist?list=PL4qTakKkQATKOyZPJG_cAMnRtF7fAIdST',
            [
                'title' => 'De espaldas al patriarcado',
                'imageWidth' => 480,
                'imageHeight' => 360,
                'type' => 'video',
                'code' => '<iframe width="200" height="113" src="https://www.youtube.com/embed/videoseries?list=PL4qTakKkQATKOyZPJG_cAMnRtF7fAIdST" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'authorName' => 'Scadrei5',
            ]
        );
    }
}
