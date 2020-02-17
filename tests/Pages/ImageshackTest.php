<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class ImageshackTest extends AbstractTestCase
{
    public function testImageShack()
    {
        $this->assertEmbed(
            'https://imageshack.com/i/ip7wO0v7j',
            [
                'title' => 'Kisses',
                'image' => 'http://imagizer.imageshack.com/img673/0/imagizer.imageshack.com/img673/9643/7wO0v7.jpg',
                'providerName' => 'ImageShack',
                'authorName' => 'ToddGilbert',
                'authorUrl' => 'https://imageshack.com/ToddGilbert',
            ]
        );
    }
}
