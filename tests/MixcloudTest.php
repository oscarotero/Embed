<?php

namespace Embed\Tests;

class MixcloudTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.mixcloud.com/malka11/malka-pres-lockdown-sessions-anjuna-history-2010-2020-/',
            [
                'title' => 'Malka Pres. #Lockdown Sessions - Anjuna History 2000-2010',
                'image' => 'https://thumbnailer.mixcloud.com/unsafe/600x600/extaudio/1/4/9/b/ea7f-32ca-4f49-9559-60eada3867e5',
                'authorName' => 'Malka',
                'authorUrl' => 'https://www.mixcloud.com/malka11/',
                'type' => 'rich',
                'providerName' => 'Mixcloud',
            ]
        );
    }
}
