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
            '"70f2e6fb017446050780256c8fc4213d"'
        ],
        'date' => [
            'Wed, 23 Sep 2020 21:47:17 GMT'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'strict-transport-security' => [
            'max-age=604800; includeSubdomains'
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
            '1.1 d8c266ed74a4ecc05eeffe79fa473f7e.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD50-C1'
        ],
        'x-amz-cf-id' => [
            'KP9wmtbSFFGWFMot-4FKu-HHPZTZp9wv9t1yxCBTWPckqUqtLkNAOw=='
        ],
        'Content-Location' => [
            'https://soundcloud.com/oembed?url=https%3A%2F%2Fsoundcloud.com%2Fididthat-1%2Flowe-ct-cape-times-world-cup&format=json'
        ],
        'X-Request-Time' => [
            '0.146 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"type":"rich","provider_name":"SoundCloud","provider_url":"https://soundcloud.com","height":400,"width":"100%","title":"LOWE CT Cape Times - World Cup by IDIDTHAT.co","description":"","thumbnail_url":"https://soundcloud.com/images/fb_placeholder.png","html":"\\u003Ciframe width=\\"100%\\" height=\\"400\\" scrolling=\\"no\\" frameborder=\\"no\\" src=\\"https://w.soundcloud.com/player/?visual=true\\u0026url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F191904624\\u0026show_artwork=true\\"\\u003E\\u003C/iframe\\u003E","author_name":"IDIDTHAT.co","author_url":"https://soundcloud.com/ididthat-1"}'
];
