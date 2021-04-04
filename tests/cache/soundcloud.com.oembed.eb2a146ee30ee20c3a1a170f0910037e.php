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
            'Sun, 04 Apr 2021 15:21:58 GMT'
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
            'W/"67bfde4180ceb866773f62a24342d449"'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'x-cache' => [
            'Miss from cloudfront'
        ],
        'via' => [
            '1.1 2bfefa9edba21d94426d6e53f8ee4516.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD51-C1'
        ],
        'x-amz-cf-id' => [
            'xiIrS8d9iGlsV2glyKvNC_Pm3cmx7nbT5m7hhnQErBQMBeu1LT8ztA=='
        ],
        'Content-Location' => [
            'https://soundcloud.com/oembed?url=https%3A%2F%2Fsoundcloud.com%2Fbruceneilmusic&format=json'
        ],
        'X-Request-Time' => [
            '0.125 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"type":"rich","provider_name":"SoundCloud","provider_url":"https://soundcloud.com","height":450,"width":"100%","title":"Bruce Neil","description":"Bruce Neil from Wokingham is a singer/songwriter with a folk inspired sound, producing songs with heartfelt depth and lyrics that captivate the listener, taking them on an insightful and thought-provoking journey. As a winner of BBC Introducing, resulting in air play nationally, he has recently achieved widespread public attention following the video release of his percussive folk rendition of Guns N’ Roses track Paradise City. Not only did this go viral on social media, it was endorsed by the band themselves and has achieved recognition and air play from several US radio stations. He takes his musical inspiration and guitar-playing style from the likes of Passenger and Mick Flannery.","thumbnail_url":"https://i1.sndcdn.com/avatars-000137863509-h9h7dr-t500x500.jpg","html":"<iframe width=\\"100%\\" height=\\"450\\" scrolling=\\"no\\" frameborder=\\"no\\" src=\\"https://w.soundcloud.com/player/?visual=true&url=https%3A%2F%2Fapi.soundcloud.com%2Fusers%2F6538603&show_artwork=true\\"></iframe>","author_name":"Bruce Neil","author_url":"https://soundcloud.com/bruceneilmusic"}'
];
