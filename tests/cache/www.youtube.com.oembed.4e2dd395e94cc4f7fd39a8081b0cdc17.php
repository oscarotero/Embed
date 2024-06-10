<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'application/json'
        ],
        'vary' => [
            'Origin',
            'X-Origin',
            'Referer'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:59:32 GMT'
        ],
        'server' => [
            'scaffolding on HTTPServer2'
        ],
        'cache-control' => [
            'private'
        ],
        'content-length' => [
            '420'
        ],
        'x-xss-protection' => [
            '0'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'alt-svc' => [
            'h3=":443"; ma=2592000,h3-29=":443"; ma=2592000'
        ],
        'Content-Location' => [
            'https://www.youtube.com/oembed?format=json&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DeiHXASgRTcA'
        ],
        'X-Request-Time' => [
            '0.197 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"title":"Noisy kittens waiting for dinner!","author_name":"smshdchrb","author_url":"https://www.youtube.com/@smshdchrb","type":"video","height":150,"width":200,"version":"1.0","provider_name":"YouTube","provider_url":"https://www.youtube.com/","thumbnail_height":360,"thumbnail_width":480,"thumbnail_url":"https://i.ytimg.com/vi/eiHXASgRTcA/hqdefault.jpg","html":"\\u003ciframe width=\\u0022200\\u0022 height=\\u0022150\\u0022 src=\\u0022https://www.youtube.com/embed/eiHXASgRTcA?feature=oembed\\u0022 frameborder=\\u00220\\u0022 allow=\\u0022accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\\u0022 referrerpolicy=\\u0022strict-origin-when-cross-origin\\u0022 allowfullscreen title=\\u0022Noisy kittens waiting for dinner!\\u0022\\u003e\\u003c/iframe\\u003e"}'
];
