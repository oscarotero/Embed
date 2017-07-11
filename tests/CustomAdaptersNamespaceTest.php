<?php

namespace Embed\Tests;

use Embed\Adapters\Youtube as YoutubeBase;
use Embed\Adapters\Webpage as WebpageBase;

class Youtube extends YoutubeBase
{
    public function getTitle()
    {
        return 'My custom youtube title';
    }
}

class Webpage extends WebpageBase
{
    public function getTitle()
    {
        return 'My custom generic title';
    }
}

class CustomAdaptersNamespaceTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.youtube.com/watch?v=eiHXASgRTcA',
            [
                'title' => 'My custom youtube title',
            ],
            [
                'custom_adapters_namespace' => 'Embed\\Tests\\'
            ]
        );
    }

    public function testTwo()
    {
        $this->assertEmbed(
            'https://oscarotero.com',
            [
                'title' => 'My custom generic title',
            ],
            [
                'custom_adapters_namespace' => 'Embed\\Tests\\'
            ]
        );
    }
}
