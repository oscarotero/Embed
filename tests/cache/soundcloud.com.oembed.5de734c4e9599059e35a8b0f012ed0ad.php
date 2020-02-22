<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'transfer-encoding' => [
            'chunked'
        ],
        'connection' => [
            'keep-alive'
        ],
        'status' => [
            '200 OK'
        ],
        'access-control-allow-headers' => [
            'Accept, Authorization, Content-Type, Origin'
        ],
        'cache-control' => [
            'private, max-age=0, must-revalidate'
        ],
        'access-control-allow-origin' => [
            '*'
        ],
        'access-control-allow-methods' => [
            'GET, PUT, POST, DELETE'
        ],
        'access-control-expose-headers' => [
            'Date'
        ],
        'etag' => [
            '"3837c0df94e24c93e1787b6776cd47b4"'
        ],
        'date' => [
            'Sat, 22 Feb 2020 23:47:18 GMT'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'strict-transport-security' => [
            'max-age=63072000'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'server' => [
            'am/2'
        ],
        'x-cache' => [
            'Miss from cloudfront'
        ],
        'via' => [
            '1.1 8fe33d67287131bcace48d75970a4ae5.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD51-C1'
        ],
        'x-amz-cf-id' => [
            '_0O5sSETn62Pt4Fhs15Ss8pTBsvaRnWZMu0O1_kS12Wn1QrV5_lv7Q=='
        ],
        'Content-Location' => [
            'https://soundcloud.com/oembed?url=https%3A%2F%2Fsoundcloud.com%2Fididthat-1%2Flowe-ct-cape-times-world-cup&format=json'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"type":"rich","provider_name":"SoundCloud","provider_url":"https://soundcloud.com","height":400,"width":"100%","title":"LOWE CT Cape Times - World Cup by iDidTht.com","description":"","thumbnail_url":"https://soundcloud.com/images/fb_placeholder.png","html":"\\u003Ciframe width=\\"100%\\" height=\\"400\\" scrolling=\\"no\\" frameborder=\\"no\\" src=\\"https://w.soundcloud.com/player/?visual=true\\u0026url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F191904624\\u0026show_artwork=true\\"\\u003E\\u003C/iframe\\u003E","author_name":"iDidTht.com","author_url":"https://soundcloud.com/ididthat-1"}'
];
