<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class RedirectionsTest extends PHPUnit_Framework_TestCase
{
    public function testGoogleTranslate()
    {
        $info1 = Embed\Embed::create('https://translate.google.com/translate?sl=de&tl=en&js=y&prev=_t&hl=en&ie=UTF-8&u=http%3A%2F%2Fwww.heise.de%2Fnewsticker%2Fmeldung%2FXKeyscore-Quellcode-Tor-Nutzer-werden-von-der-NSA-als-Extremisten-markiert-und-ueberwacht-2248328.html&edit-text=');
        $info2 = Embed\Embed::create('http://www.heise.de/newsticker/meldung/XKeyscore-Quellcode-Tor-Nutzer-werden-von-der-NSA-als-Extremisten-markiert-und-ueberwacht-2248328.html');
        $this->assertEquals($info1->url, $info2->url);
    }

    public function testRdio()
    {
        $info1 = Embed\Embed::create('http://rd.io/x/Q1IjXC8s');
        $info2 = Embed\Embed::create('https://www.rdio.com/artist/Soundgarden/album/Superunknown/');
        $this->assertEquals($info1->url, $info2->url);
    }

    public function testTwitter()
    {
        $info1 = Embed\Embed::create('https://twitter.com/#!/twitter/status/99530515043983360');
        $info2 = Embed\Embed::create('https://twitter.com/twitter/status/99530515043983360');
        $this->assertEquals($info1->url, $info2->url);
    }
}
