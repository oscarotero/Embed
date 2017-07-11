<?php

namespace Embed\Tests;

use Embed\Embed;

class RedirectionsTest extends AbstractTestCase
{
    public function testGenericCanonical()
    {
        $expected = 'https://www.dagbladet.no/emne/utenriks';
        $unwanted = 'http://www.dagbladet.no/';

        // Do NOT follow canonical
        $info1 = Embed::create($expected, ['follow_canonical' => false]);
        $this->assertString($expected, $info1->getResponse()->getUrl());

        // Follow canonical
        // If this test fails, the unwanted canonical url has changed
        $info2 = Embed::create($expected, ['follow_canonical' => true]);
        $this->assertString($unwanted, $info2->getResponse()->getUrl());
    }

    public function testGoogleTranslate()
    {
        $info1 = Embed::create('https://translate.google.com/translate?sl=de&tl=en&js=y&prev=_t&hl=en&ie=UTF-8&u=http%3A%2F%2Fwww.heise.de%2Fnewsticker%2Fmeldung%2FXKeyscore-Quellcode-Tor-Nutzer-werden-von-der-NSA-als-Extremisten-markiert-und-ueberwacht-2248328.html&edit-text=');
        $info2 = Embed::create('http://www.heise.de/newsticker/meldung/XKeyscore-Quellcode-Tor-Nutzer-werden-von-der-NSA-als-Extremisten-markiert-und-ueberwacht-2248328.html');
        $this->assertString($info1->url, $info2->url);
    }

    public function testTwitter()
    {
        $info1 = Embed::create('https://twitter.com/#!/twitter/status/99530515043983360');
        $info2 = Embed::create('https://twitter.com/twitter/status/99530515043983360');
        $this->assertString($info1->url, $info2->url);
    }
}
