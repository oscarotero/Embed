<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx'
        ],
        'date' => [
            'Sun, 23 Feb 2020 00:01:30 GMT'
        ],
        'content-type' => [
            'application/json'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'content-language' => [
            'en'
        ],
        'strict-transport-security' => [
            'max-age=31536000'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'Content-Location' => [
            'https://api.crowdsignal.com/oembed?url=https%3A%2F%2Fpoll.fm%2F7012505&format=json'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"rich","version":"1.0","provider_name":"Crowdsignal","provider_url":"https:\\/\\/crowdsignal.com","title":"Which design do you prefer?","html":"<script type=\\"text\\/javascript\\" charset=\\"utf-8\\" src=\\"https:\\/\\/secure.polldaddy.com\\/p\\/7012505.js\\"><\\/script><noscript><iframe src=\\"https:\\/\\/poll.fm\\/7012505\\/embed\\" frameborder=\\"0\\" class=\\"cs-iframe-embed\\"><\\/iframe><\\/noscript>"}'
];
