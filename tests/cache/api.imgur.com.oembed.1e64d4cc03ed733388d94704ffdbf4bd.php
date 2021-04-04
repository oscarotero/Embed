<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'application/json'
        ],
        'cache-control' => [
            'max-age=60, stale-while-revalidate=600, stale-if-error=86400, public'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'accept-ranges' => [
            'bytes'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:27:24 GMT'
        ],
        'age' => [
            '0'
        ],
        'x-served-by' => [
            'cache-bwi5162-BWI, cache-mad22049-MAD'
        ],
        'x-cache' => [
            'MISS, MISS'
        ],
        'x-cache-hits' => [
            '0, 0'
        ],
        'x-timer' => [
            'S1617550044.424972,VS0,VE91'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'access-control-allow-methods' => [
            'GET, PUT, POST, PATCH, DELETE, OPTIONS'
        ],
        'access-control-allow-headers' => [
            'Authorization, Content-Type, Accept, X-Mashape-Authorization, IMGURPLATFORM, IMGURUIDJAFO, sessionCount, IMGURMWBETA, IMGURMWBETAOPTIN'
        ],
        'server' => [
            'cat factory 1.0'
        ],
        'access-control-allow-origin' => [
            '*'
        ],
        'access-control-allow-credentials' => [
            'true'
        ],
        'x-frame-options' => [
            'DENY'
        ],
        'content-length' => [
            '285'
        ],
        'Content-Location' => [
            'https://api.imgur.com/oembed?url=https%3A%2F%2Fi.imgur.com%2FX6rkCc5.jpg&format=json'
        ],
        'X-Request-Time' => [
            '0.182 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":"1.0","type":"rich","provider_name":"Imgur","provider_url":"https:\\/\\/imgur.com","width":540,"height":500,"html":"<blockquote class=\\"imgur-embed-pub\\" lang=\\"en\\" data-id=\\"X6rkCc5\\"><a href=\\"https:\\/\\/imgur.com\\/X6rkCc5\\">Picture of a Mountain Gorilla right before he punched the photographer<\\/a><\\/blockquote><script async src=\\"\\/\\/s.imgur.com\\/min\\/embed.js\\" charset=\\"utf-8\\"><\\/script>"}'
];
