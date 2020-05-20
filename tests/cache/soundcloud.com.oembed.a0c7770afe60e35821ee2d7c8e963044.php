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
            '"9712626afb9a3443e83d3aff571d9666"'
        ],
        'date' => [
            'Wed, 20 May 2020 17:54:27 GMT'
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
            '1.1 cbd142ed1a4d4c12006d99756547bb8a.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD51-C1'
        ],
        'x-amz-cf-id' => [
            'ZFt8UYzET76dLaI0kzYiA2_gD8uC8NRdWb_q8OzsEmAuwyGjVk6QoA=='
        ],
        'Content-Location' => [
            'https://soundcloud.com/oembed?url=https%3A%2F%2Fsoundcloud.com%2Fzedsdead%2Fzeds-dead-twin-shadow-lost-you-feat-dangelo-lacy&format=json'
        ],
        'X-Request-Time' => [
            '0.166 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"type":"rich","provider_name":"SoundCloud","provider_url":"https://soundcloud.com","height":400,"width":"100%","title":"Lost You (feat. Twin Shadow & D\'Angelo Lacy) by Zeds Dead","description":"MUSIC VIDEO : https://www.youtube.com/watch?v=VJm7IPrBmLY\\r\\n\\r\\nZeds Dead\\r\\nwww.facebook.com/zedsdead\\r\\nwww.twitter.com/whoszed\\r\\nwww.instagram.com/zedsdeadofficial\\r\\n\\r\\nTwin Shadow\\r\\nwww.facebook.com/twnshdw\\r\\nwww.twitter.com/twinshadow\\r\\nwww.instagram.com/thetwinshadow\\r\\n\\r\\n","thumbnail_url":"https://i1.sndcdn.com/artworks-JGcGO59zieR7-0-t500x500.jpg","html":"\\u003Ciframe width=\\"100%\\" height=\\"400\\" scrolling=\\"no\\" frameborder=\\"no\\" src=\\"https://w.soundcloud.com/player/?visual=true\\u0026url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F150745932\\u0026show_artwork=true\\"\\u003E\\u003C/iframe\\u003E","author_name":"Zeds Dead","author_url":"https://soundcloud.com/zedsdead"}'
];
