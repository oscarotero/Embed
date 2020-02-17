<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class SassmeisterTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://sassmeister.com/gist/1122e441f0434ec6eb2a',
            [
                'title' => 'SassMeister | The Sass Playground!',
                'providerName' => 'Sassmeister',
                'code' => '<p class="sassmeister" data-gist-id="1122e441f0434ec6eb2a" data-height="480" data-theme="tomorrow"><a href="http://sassmeister.com/gist/1122e441f0434ec6eb2a">Play with this gist on SassMeister.</a></p><script src="http://cdn.sassmeister.com/js/embed.js" async></script>',
            ]
        );
    }
}
