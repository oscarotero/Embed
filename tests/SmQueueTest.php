<?php

namespace Embed\Tests;

/**
 * This is to test responses html that need to be trimmed before load in the DOMElement.
 */
class SmQueue extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.smqueue.com/registration',
            [
                'title' => 'Registration',
                'image' => 'https://www.smqueue.com/public/images/smqueue-logo-small.png',
            ]
        );
    }
}
