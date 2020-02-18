<?php
declare(strict_types = 1);

return [
    'headers' => [
        'Content-Location' => [
            'http://www.youtube.com/oembed?format=json&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DeiHXASgRTcA',
        ],
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"video","thumbnail_width":480,"provider_name":"YouTube","title":"Noisy kittens waiting for dinner!","thumbnail_height":360,"provider_url":"https:\\/\\/www.youtube.com\\/","version":"1.0","height":344,"author_name":"smshdchrb","html":"\\u003ciframe width=\\"459\\" height=\\"344\\" src=\\"https:\\/\\/www.youtube.com\\/embed\\/eiHXASgRTcA?feature=oembed\\" frameborder=\\"0\\" allow=\\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\\" allowfullscreen\\u003e\\u003c\\/iframe\\u003e","author_url":"https:\\/\\/www.youtube.com\\/user\\/smshdchrb","width":459,"thumbnail_url":"https:\\/\\/i.ytimg.com\\/vi\\/eiHXASgRTcA\\/hqdefault.jpg"}',
];
