<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-security-policy-report-only' => [
            'default-src https: blob: wss: data: android-webview-video-poster: android-webview: chrome-extension: safari-extension: \'unsafe-eval\' \'unsafe-inline\'; report-uri https://www.dailymotion.com/content_security_policy_report_uri'
        ],
        'server' => [
            'DMS/1.0.42'
        ],
        'x-dm-backnode' => [
            'web-465.adm.dc3.dailymotion.com:80'
        ],
        'vary' => [
            'X-DM-SSL,Accept-Encoding'
        ],
        'cache-control' => [
            'no-cache'
        ],
        'content-type' => [
            'application/json'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'content-security-policy' => [
            'upgrade-insecure-requests'
        ],
        'access-control-expose-headers' => [
            'X-DM-BackNode-Response-Time'
        ],
        'strict-transport-security' => [
            'max-age=31708800; includeSubDomains'
        ],
        'date' => [
            'Sun, 23 Feb 2020 00:00:46 GMT'
        ],
        'keep-alive' => [
            'timeout=60, max=4998'
        ],
        'x-dm-lb-ip' => [
            '195.8.215.136'
        ],
        'x-dm-lb-name' => [
            'lb-10'
        ],
        'x-dm-backnode-response-time' => [
            '25'
        ],
        'connection' => [
            'Keep-Alive'
        ],
        'set-cookie' => [
            'sid=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'sdx=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'su_user_id=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/',
            'su_sid=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/',
            'su_sdx=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/',
            'client_token=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'access_token=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'refresh_token=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;'
        ],
        'expect-ct' => [
            'max-age=0, report-uri="https://www.dailymotion.com/content_security_policy_report_uri"'
        ],
        'content-length' => [
            '309'
        ],
        'Content-Location' => [
            'https://www.dailymotion.com/services/oembed?url=https%3A%2F%2Fwww.dailymotion.com%2Fvideo%2Fxy0wd&format=json'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"video","version":"1.0","provider_name":"Dailymotion","provider_url":"https:\\/\\/www.dailymotion.com","title":"Chats paresseux","description":"","author_name":"jeanbamin","author_url":"https:\\/\\/www.dailymotion.com\\/jeanbamin","width":480,"height":360,"html":"<iframe frameborder=\\"0\\" width=\\"480\\" height=\\"360\\" src=\\"https:\\/\\/www.dailymotion.com\\/embed\\/video\\/xy0wd\\" allowfullscreen allow=\\"autoplay\\"><\\/iframe>","thumbnail_url":"https:\\/\\/s1.dmcdn.net\\/v\\/63aD1UKS2knKaXxs\\/x240","thumbnail_width":320,"thumbnail_height":240}'
];
