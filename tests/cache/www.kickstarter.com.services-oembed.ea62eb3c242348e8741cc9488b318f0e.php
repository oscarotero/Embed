<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'Varnish',
            'nginx'
        ],
        'retry-after' => [
            '0'
        ],
        'location' => [
            'https://www.kickstarter.com/services/oembed?url=https%3A%2F%2Fwww.kickstarter.com%2Fprojects%2F1452363698%2Fgood-seed-craft-veggie-burgers&format=json'
        ],
        'content-length' => [
            '0'
        ],
        'accept-ranges' => [
            'bytes',
            'bytes'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:27:29 GMT',
            'Sun, 04 Apr 2021 15:27:29 GMT'
        ],
        'via' => [
            '1.1 varnish',
            '1.1 varnish'
        ],
        'connection' => [
            'close'
        ],
        'set-cookie' => [
            '_pxhd=41d993775e102341a7342f41f84da559f5d91ab81e518cef429b8ecb5e9202aa:447efba0-955a-11eb-80c6-97d433578031; Expires=Mon, 04 Apr 2022 15:27:29 GMT; path=/;',
            '_pxhd=41d993775e102341a7342f41f84da559f5d91ab81e518cef429b8ecb5e9202aa:447efba0-955a-11eb-80c6-97d433578031; Expires=Mon, 04 Apr 2022 15:27:29 GMT; path=/;'
        ],
        'x-served-by' => [
            'cache-mad22076-MAD',
            'cache-mad22034-MAD'
        ],
        'x-cache' => [
            'HIT',
            'MISS'
        ],
        'x-cache-hits' => [
            '0',
            '0'
        ],
        'strict-transport-security' => [
            'max-age=31557600  HTTP/2 200',
            'max-age=31557600'
        ],
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'etag' => [
            'W/"cb87bfa1ab31345a3bd3cc59c4d218e8"'
        ],
        'cache-control' => [
            'max-age=0, private, must-revalidate'
        ],
        'x-request-id' => [
            '7878d4d5-346a-48c5-b174-089acdddc4ea'
        ],
        'x-runtime' => [
            '0.069338'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'fastly-restarts' => [
            '1'
        ],
        'Content-Location' => [
            'https://www.kickstarter.com/services/oembed?url=https%3A%2F%2Fwww.kickstarter.com%2Fprojects%2F1452363698%2Fgood-seed-craft-veggie-burgers&format=json'
        ],
        'X-Request-Time' => [
            '0.423 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":"1.0","type":"rich","provider_name":"Kickstarter","provider_url":"https://www.kickstarter.com/","title":"Good Seed Craft Veggie Burgers","author_name":"Oliver Ponce and Erin Shotwell","author_url":"https://www.kickstarter.com/profile/1452363698","thumbnail_url":"https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&crop=faces&w=560&h=315&fit=crop&v=1463686200&auto=format&frame=1&q=92&s=551e5f9430e497f3954a21ab81b30c6a","thumbnail_width":560,"thumbnail_height":315.0,"width":480,"height":270.0,"html":"<iframe src=\\"https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers/widget/video.html\\" height=\\"270.0\\" width=\\"480\\" frameborder=\\"0\\" scrolling=\\"no\\"></iframe>"}
'
];
