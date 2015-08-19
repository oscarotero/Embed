<?php
class PolldaddyTest extends TestCaseBase
{
    public function testOne()
    {
        $info = $this->getInfo('http://polldaddy.com/poll/7012505/');

        $this->assertString($info->title, "Which design do you prefer?");
        $this->assertString($info->description, 'Poll Answers: Option #1, Option #2,');
        $this->assertString($info->code, '<script type="text/javascript" charset="utf-8" src="https://secure.polldaddy.com/p/7012505.js"></script><noscript><a href="https://polldaddy.com/poll/7012505/">Which design do you prefer?</a></noscript>');
        $this->assertString($info->type, 'rich');
        $this->assertString($info->providerName, 'Polldaddy');
    }
}
