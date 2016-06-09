<?php

class UrlTest extends TestCaseBase
{
    public function urlsParserProvider()
    {
        return [
            ['http://vimeo.com//69912181?', 'http://vimeo.com/69912181'],
            ['http://vimeo.com//69912181', 'http://vimeo.com/69912181'],
            ['http://vimeo.com/69912181', 'http://vimeo.com/69912181'],
            ['http://vimeo.com/69912181/', 'http://vimeo.com/69912181/'],
            ['https://www.tumblr.com/oembed/1.0', 'https://www.tumblr.com/oembed/1.0'],
            ['https://www.tumblr.com/oembed/1.0/', 'https://www.tumblr.com/oembed/1.0/'],
            ['https://www.tumblr.com/oembed//1.0//', 'https://www.tumblr.com/oembed/1.0/'],
            ['https://animoto.com/oembeds/create.xml?automated=true&options=start_hq', 'https://animoto.com/oembeds/create.xml?automated=true&options=start_hq'],
            ['http://static2.politico.com/dims4/default/28fb355/2147483647/resize/1160x%3E/quality/90/?url=http%3A%2F%2Fs3-origin-images.politico.com%2F2013%2F12%2F18%2F131218_george_w_bush_barack_obama_ap_60', 'http://static2.politico.com/dims4/default/28fb355/2147483647/resize/1160x%3E/quality/90/?url=http%3A%2F%2Fs3-origin-images.politico.com%2F2013%2F12%2F18%2F131218_george_w_bush_barack_obama_ap_60'],
            ['https://plus.google.com/+carlsenverlag/posts/2hibgWrmhp1', 'https://plus.google.com/+carlsenverlag/posts/2hibgWrmhp1'],
            ['http://test.drupal.dd:8083/tests/localport.html', 'http://test.drupal.dd:8083/tests/localport.html'],
            ['http://testuser@test.drupal.dd:8083/tests/identified.html', 'http://testuser@test.drupal.dd:8083/tests/identified.html'],
            ['http://testuser:testpass@test.drupal.dd:8083/tests/authenticated.html', 'http://testuser:testpass@test.drupal.dd:8083/tests/authenticated.html'],
            ['http://testuser:testpass@test.drupal.dd:8083/tests/authenticated.html', 'http://testuser:testpass@test.drupal.dd:8083/tests/authenticated.html'],
        ];
    }

    /**
     * @dataProvider urlsParserProvider
     */
    public function testParser($url, $expected_url)
    {
        $parsed_url = new Embed\Url($url);

        $this->assertSame($expected_url, $parsed_url->getUrl());
    }

    public function testDirectoryPosition()
    {
        $url = new Embed\Url('http://domain.com/first//second/third');

        $this->assertSame('first', $url->getDirectoryPosition(0));
        $this->assertSame('second', $url->getDirectoryPosition(1));
        $this->assertSame('third', $url->getDirectoryPosition(2));
        $this->assertNull($url->getDirectoryPosition(3));

        $url = $url->withDirectoryPosition(0, 'one')->withDirectoryPosition(2, 'four');

        $this->assertSame('one', $url->getDirectoryPosition(0));
        $this->assertSame('four', $url->getDirectoryPosition(2));
        $this->assertNull($url->getDirectoryPosition(3));

        $this->assertSame('http://domain.com/one/second/four', $url->getUrl());
    }

    public function testDomain()
    {
        $url = new Embed\Url('http://www.domain.com');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.com', $url->getDomain(true));

        $url = new Embed\Url('http://www.domain.co.uk');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.co.uk', $url->getDomain(true));

        $url = new Embed\Url('http://www.domain.com.au');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.com.au', $url->getDomain(true));

        $url = new Embed\Url('http://www.redrooster.org.uk');

        $this->assertSame('redrooster', $url->getDomain());
        $this->assertSame('redrooster.org.uk', $url->getDomain(true));
    }

    public function testPathsWithDots()
    {
        $url = new Embed\Url('https://en.wikipedia.org/wiki/Supernatural_(U.S._TV_series)');
        $this->assertNull($url->getExtension());
        $this->assertSame('/wiki/Supernatural_(U.S._TV_series)', $url->getPath());
        $this->assertSame('Supernatural_(U.S._TV_series)', $url->getDirectoryPosition(1));
    }
}
