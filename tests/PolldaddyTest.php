<?php
class PolldaddyTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://polldaddy.com/poll/7012505/');

        $this->assertEquals($info->title, "Which design do you prefer?");
        $this->assertEquals($info->description, 'Poll Answers: Option #1, Option #2,');
        $this->assertEquals($info->code, '<script type="text/javascript" charset="utf-8" src="https://secure.polldaddy.com/p/7012505.js"></script><noscript><a href="https://polldaddy.com/poll/7012505/">Which design do you prefer?</a></noscript>');
        $this->assertEquals($info->type, 'rich');
        $this->assertEquals($info->providerName, 'Polldaddy');
    }
}
