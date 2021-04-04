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
            'max-age=0, private, must-revalidate'
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
        'x-ua-compatible' => [
            'IE=Edge,chrome=1'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:22:38 GMT'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'strict-transport-security' => [
            'max-age=63072000; includeSubdomains; preload'
        ],
        'server' => [
            'am/2'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'etag' => [
            'W/"cb62c16cfad142cb9b93823269f4d3e2"'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'x-cache' => [
            'Miss from cloudfront'
        ],
        'via' => [
            '1.1 c02c12149d44c9deefaab126c94c3d3f.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD51-C1'
        ],
        'x-amz-cf-id' => [
            'CAbmZ-XusAByNbPCymnI2wmhexjH9OFBPSQc71qJhCPEP4YMvw3LHQ=='
        ],
        'Content-Location' => [
            'https://soundcloud.com/oembed?url=https%3A%2F%2Fsoundcloud.com%2Fididthat-1%2Flowe-ct-cape-times-world-cup&format=json'
        ],
        'X-Request-Time' => [
            '0.127 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"type":"rich","provider_name":"SoundCloud","provider_url":"https://soundcloud.com","height":400,"width":"100%","title":"LOWE CT Cape Times - World Cup by IDIDTHAT.co","description":"","thumbnail_url":"https://soundcloud.com/images/fb_placeholder.png","html":"<iframe width=\\"100%\\" height=\\"400\\" scrolling=\\"no\\" frameborder=\\"no\\" src=\\"https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F191904624&show_artwork=true\\"></iframe>","author_name":"IDIDTHAT.co","author_url":"https://soundcloud.com/ididthat-1"}'
];
