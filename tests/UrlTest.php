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

            $this->assertString($expected_url, $parsed_url->getUrl());
        }
    }

    public function testDirectoryPosition()
    {
        $url = new Embed\Url('http://domain.com/first//second/third');

        $this->assertString('first', $url->getDirectoryPosition(0));
        $this->assertString('second', $url->getDirectoryPosition(1));
        $this->assertString('third', $url->getDirectoryPosition(2));
        $this->assertNull($url->getDirectoryPosition(3));

        $url = $url->withDirectoryPosition(0, 'one')->withDirectoryPosition(2, 'four');

        $this->assertString('one', $url->getDirectoryPosition(0));
        $this->assertString('four', $url->getDirectoryPosition(2));
        $this->assertNull($url->getDirectoryPosition(3));

        $this->assertString('http://domain.com/one/second/four', $url->getUrl());
    }

    public function testDomain()
    {
        $url = new Embed\Url('http://www.domain.com');

        $this->assertString('domain', $url->getDomain());
        $this->assertString('domain.com', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.co.uk');

        $this->assertString('domain', $url->getDomain());
        $this->assertString('domain.co.uk', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.com.au');

        $this->assertString('domain', $url->getDomain());
        $this->assertString('domain.com.au', $url->getDomain(1));
    }
}
