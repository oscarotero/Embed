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
            '"b79b1b0cb75e76bf920d33b32b3ed936"'
        ],
        'date' => [
            'Wed, 23 Sep 2020 21:47:16 GMT'
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
            '1.1 06bb36c6f8415e5c64e03df316bffb5b.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD50-C1'
        ],
        'x-amz-cf-id' => [
            'qNM3sU6piHMF8lkNy801Y7i5uj4V-eoD5EhKk2J053RxkOryKbvTRw=='
        ],
        'Content-Location' => [
            'https://soundcloud.com/oembed?url=https%3A%2F%2Fsoundcloud.com%2Fbruceneilmusic&format=json'
        ],
        'X-Request-Time' => [
            '0.506 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"type":"rich","provider_name":"SoundCloud","provider_url":"https://soundcloud.com","height":450,"width":"100%","title":"Bruce Neil","description":"Bruce Neil from Wokingham is a singer/songwriter with a folk inspired sound, producing songs with heartfelt depth and lyrics that captivate the listener, taking them on an insightful and thought-provoking journey. As a winner of BBC Introducing, resulting in air play nationally, he has recently achieved widespread public attention following the video release of his percussive folk rendition of Guns N’ Roses track Paradise City. Not only did this go viral on social media, it was endorsed by the band themselves and has achieved recognition and air play from several US radio stations. He takes his musical inspiration and guitar-playing style from the likes of Passenger and Mick Flannery.","thumbnail_url":"https://i1.sndcdn.com/avatars-000137863509-h9h7dr-t500x500.jpg","html":"\\u003Ciframe width=\\"100%\\" height=\\"450\\" scrolling=\\"no\\" frameborder=\\"no\\" src=\\"https://w.soundcloud.com/player/?visual=true\\u0026url=https%3A%2F%2Fapi.soundcloud.com%2Fusers%2F6538603\\u0026show_artwork=true\\"\\u003E\\u003C/iframe\\u003E","author_name":"Bruce Neil","author_url":"https://soundcloud.com/bruceneilmusic"}'
];
