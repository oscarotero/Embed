<?php
include_once dirname(__DIR__).'/src/autoloader.php';

class UrlTest extends PHPUnit_Framework_TestCase
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

            $this->assertEquals($expected_url, $parsed_url->getUrl());
        }
    }

    public function testDirectory()
    {
        $url = new Embed\Url('http://domain.com/first//second/third');

        $this->assertEquals('first', $url->getDirectory(0));
        $this->assertEquals('second', $url->getDirectory(1));
        $this->assertEquals('third', $url->getDirectory(2));
        $this->assertNull($url->getDirectory(3));

        $url->setDirectory(0, 'one');
        $url->setDirectory(2, 'four');

        $this->assertEquals('one', $url->getDirectory(0));
        $this->assertEquals('four', $url->getDirectory(2));
        $this->assertNull($url->getDirectory(3));

        $this->assertEquals('http://domain.com/one/second/four', $url->getUrl());
    }

    public function testDomain()
    {
        $url = new Embed\Url('http://www.domain.com');

        $this->assertEquals('domain', $url->getDomain());
        $this->assertEquals('domain.com', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.co.uk');

        $this->assertEquals('domain', $url->getDomain());
        $this->assertEquals('domain.co.uk', $url->getDomain(1));

        $url = new Embed\Url('http://www.domain.com.au');

        $this->assertEquals('domain', $url->getDomain());
        $this->assertEquals('domain.com.au', $url->getDomain(1));
    }
}
