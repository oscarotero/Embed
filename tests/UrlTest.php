<?php
class UrlTest extends TestCaseBase
{
    public function testParser()
    {
        $urls = [
            'http://vimeo.com//69912181?' => 'http://vimeo.com/69912181',
            'http://vimeo.com//69912181' => 'http://vimeo.com/69912181',
            'http://vimeo.com/69912181' => 'http://vimeo.com/69912181',
        ];

        foreach ($urls as $url => $expected_url) {
            $parsed_url = new Embed\Url($url);

            $this->assertSame($expected_url, $parsed_url->getUrl());
        }
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
        $this->assertSame('domain.com', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.co.uk');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.co.uk', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.com.au');

        $this->assertSame('domain', $url->getDomain());
        $this->assertSame('domain.com.au', $url->getDomain(1));
    }
}
