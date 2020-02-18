<?php
declare(strict_types = 1);

return [
    'headers' => [
        'Content-Location' => [
            'https://www.dailymotion.com/services/oembed?url=https%3A%2F%2Fwww.dailymotion.com%2Fvideo%2Fxy0wd&format=json',
        ],
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"video","version":"1.0","provider_name":"Dailymotion","provider_url":"https:\\/\\/www.dailymotion.com","title":"Chats paresseux","description":"","author_name":"jeanbamin","author_url":"https:\\/\\/www.dailymotion.com\\/jeanbamin","width":480,"height":360,"html":"<iframe frameborder=\\"0\\" width=\\"480\\" height=\\"360\\" src=\\"https:\\/\\/www.dailymotion.com\\/embed\\/video\\/xy0wd\\" allowfullscreen allow=\\"autoplay\\"><\\/iframe>","thumbnail_url":"https:\\/\\/s2.dmcdn.net\\/v\\/63aD1UI_hFErCLKz\\/x240","thumbnail_width":320,"thumbnail_height":240}',
];
