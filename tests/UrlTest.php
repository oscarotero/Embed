<?php

namespace Embed\Tests;

use Embed\Http\Url;

class UrlTest extends AbstractTestCase
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
            ['http://www.innherred.no/kultur/2017/03/25/On-the-road-med-%C3%86-og-Hagen-14499028.ece', 'http://www.innherred.no/kultur/2017/03/25/On-the-road-med-%C3%86-og-Hagen-14499028.ece'],
            ['https://pbs.twimg.com/media/CvCZ90BXYAE5q80.png:large', 'https://pbs.twimg.com/media/CvCZ90BXYAE5q80.png:large'],
            ['http://img.bibo.kz/?7142389.jpg', 'http://img.bibo.kz/?7142389.jpg'],
        ];
    }

    /**
     * @dataProvider urlsParserProvider
     */
    public function testParser($url, $expected_url)
    {
        $parsed_url = Url::create($url);

        $this->assertSame($expected_url, (string) $parsed_url);
    }

    public function testDirectoryPosition()
    {
        $url = Url::create('http://domain.com/first//second/third');

        $this->assertSame('first', $url->getDirectoryPosition(0));
        $this->assertSame('second', $url->getDirectoryPosition(1));
        $this->assertSame('third', $url->getDirectoryPosition(2));
        $this->assertNull($url->getDirectoryPosition(3));

        $url = $url->withDirectoryPosition(0, 'one')->withDirectoryPosition(2, 'four');

        $this->assertSame('one', $url->getDirectoryPosition(0));
        $this->assertSame('four', $url->getDirectoryPosition(2));
        $this->assertNull($url->getDirectoryPosition(3));

        $this->assertSame('http://domain.com/one/second/four', (string) $url);
    }

    public function testDomain()
    {
        $url = Url::create('http://www.domain.com');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.com', $url->getDomain(true));

        $url = Url::create('http://www.domain.co.uk');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.co.uk', $url->getDomain(true));

        $url = Url::create('http://www.domain.com.au');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.com.au', $url->getDomain(true));

        $url = Url::create('http://www.redrooster.org.uk');

        $this->assertSame('redrooster', $url->getDomain());
        $this->assertSame('redrooster.org.uk', $url->getDomain(true));
    }

    public function testPathsWithDots()
    {
        $url = Url::create('https://en.wikipedia.org/wiki/Supernatural_(U.S._TV_series)');
        $this->assertNull($url->getExtension());
        $this->assertSame('/wiki/Supernatural_%28U.S._TV_series%29', $url->getPath());
        $this->assertSame('Supernatural_(U.S._TV_series)', $url->getDirectoryPosition(1));
    }

    public function urlMatchProvider()
    {
        return [
            [
                'http://vimeo.com',
                'vimeo.com/',
                true,
            ],[
                'http://vimeo.com/69912181',
                'vimeo.com/*',
                true,
            ],[
                'http://vimeo.com/69912181?play=true',
                'vimeo.com/*',
                true,
            ],[
                'http://vimeo.com/69912181?play=true',
                'vimeo.com/69912181',
                true,
            ],[
                'http://vimeo.com/69912181?play=true',
                'vimeo.com/69912181?*',
                true,
            ],[
                'http://vimeo.com/69912181?play=true',
                'vimeo.com/69912181?*true',
                true,
            ],[
                'http://vimeo.com/69912181?play=true',
                'vimeo.com/69912181?*false',
                false,
            ],[
                'http://vimeo.com/69912181?play=true',
                '?play=true',
                true,
            ],[
                'http://vimeo.com/69912181?play=true',
                '?*play=true',
                true,
            ],[
                'http://vimeo.com/69912181?play=true&controls=false',
                '?&play=true*',
                true,
            ],[
                'http://vimeo.com/69912181?play=true&controls=false',
                '?&controls=*',
                true,
            ],[
                'http://vimeo.com/69912181?play=true&controls=false',
                '?controls=*',
                false,
            ]
        ];
    }

    /**
     * @dataProvider urlMatchProvider
     */
    public function testUrlMatch($url, $pattern, $expected)
    {
        $url = Url::create($url);
        $this->assertSame($expected, $url->match($pattern));
    }
}
