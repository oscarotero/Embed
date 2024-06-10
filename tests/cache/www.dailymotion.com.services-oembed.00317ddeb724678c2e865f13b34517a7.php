<?php
declare(strict_types = 1);

return [
    'headers' => [
        'cache-control' => [
            'no-cache'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'content-length' => [
            '339'
        ],
        'content-security-policy' => [
            'upgrade-insecure-requests'
        ],
        'content-security-policy-report-only' => [
            'default-src https: blob: wss: data: android-webview-video-poster: android-webview: chrome-extension: safari-extension: \'unsafe-eval\' \'unsafe-inline\'; report-uri https://www.dailymotion.com/content_security_policy_report_uri'
        ],
        'content-type' => [
            'application/json'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:58:43 GMT'
        ],
        'referrer-policy' => [
            'no-referrer-when-downgrade'
        ],
        'server' => [
            'DMS/1.0.42'
        ],
        'server-timing' => [
            'total;dur=16, dc;desc="dc3"'
        ],
        'strict-transport-security' => [
            'max-age=31708800; includeSubDomains; preload'
        ],
        'timing-allow-origin' => [
            '*'
        ],
        'vary' => [
            'X-DM-SSL,Accept-Encoding'
        ],
        'Content-Location' => [
            'https://www.dailymotion.com/services/oembed?url=https%3A%2F%2Fwww.dailymotion.com%2Fvideo%2Fxy0wd&format=json'
        ],
        'X-Request-Time' => [
            '0.127 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"video","version":"1.0","provider_name":"Dailymotion","provider_url":"https:\\/\\/www.dailymotion.com","title":"Chats paresseux","description":"","author_name":"jeanbamin","author_url":"https:\\/\\/www.dailymotion.com\\/jeanbamin","width":480,"height":360,"html":"<iframe frameborder=\\"0\\" width=\\"480\\" height=\\"360\\" src=\\"https:\\/\\/geo.dailymotion.com\\/player.html?video=xy0wd&\\" allowfullscreen allow=\\"autoplay; fullscreen; picture-in-picture; web-share\\"><\\/iframe>","thumbnail_url":"https:\\/\\/s2.dmcdn.net\\/v\\/63aD1au2tjDf9rTG\\/x240","thumbnail_width":320,"thumbnail_height":240}'
];
