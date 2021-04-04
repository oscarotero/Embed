<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'application/json; charset=UTF-8'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'cache-control' => [
            'max-age=0, must-revalidate'
        ],
        'x-moose' => [
            'majestic'
        ],
        'accept-ranges' => [
            'bytes'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:27:40 GMT'
        ],
        'via' => [
            '1.1 varnish'
        ],
        'vary' => [
            'accept-encoding'
        ],
        'set-cookie' => [
            'csv=1; Max-Age=63072000; Domain=.reddit.com; Path=/; Secure; SameSite=None',
            'edgebucket=pIsVfIq9vXZdZFxGRS; Domain=reddit.com; Max-Age=63071999; Path=/;  secure'
        ],
        'strict-transport-security' => [
            'max-age=15552000; includeSubDomains; preload'
        ],
        'server' => [
            'snooserv'
        ],
        'content-length' => [
            '402'
        ],
        'Content-Location' => [
            'https://www.reddit.com/oembed?url=https%3A%2F%2Fwww.reddit.com%2Fr%2Finvesting%2Fcomments%2F7pfpeq%2Fbuffett_on_cyrptocurrencies_i_can_say_almost_with%2F&format=json'
        ],
        'X-Request-Time' => [
            '0.184 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"provider_url": "https://www.reddit.com/", "version": "1.0", "title": "Buffett on cyrptocurrencies: \'I can say almost with certainty that they will come to a bad ending\'", "provider_name": "reddit", "type": "rich", "html": "\\n    \\u003Cblockquote class=\\"reddit-card\\" \\u003E\\n      \\u003Ca href=\\"https://www.reddit.com/r/investing/comments/7pfpeq/buffett_on_cyrptocurrencies_i_can_say_almost_with/?ref_source=embed\\u0026amp;ref=share\\"\\u003EBuffett on cyrptocurrencies: \'I can say almost with certainty that they will come to a bad ending\'\\u003C/a\\u003E from\\n      \\u003Ca href=\\"https://www.reddit.com/r/investing/\\"\\u003Einvesting\\u003C/a\\u003E\\n    \\u003C/blockquote\\u003E\\n    \\u003Cscript async src=\\"https://embed.redditmedia.com/widgets/platform.js\\" charset=\\"UTF-8\\"\\u003E\\u003C/script\\u003E\\n", "author_name": "dennisrieves"}'
];
