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
        'nel' => [
            '{"report_to":"telemetry","max_age":7776000,"include_subdomains":true,"failure_fraction":1.0}'
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
        'report-to' => [
            '{"group":"telemetry","max_age":7776000,"endpoints":[{"url":"https://telemetry.dailymotion.com/"}],"include_subdomains":true}'
        ],
        'strict-transport-security' => [
            'max-age=31708800; includeSubDomains'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:24:21 GMT'
        ],
        'server-timing' => [
            'total;dur=15, dc;desc="dc3"'
        ],
        'keep-alive' => [
            'timeout=60, max=4990'
        ],
        'timing-allow-origin' => [
            '*'
        ],
        'connection' => [
            'Keep-Alive'
        ],
        'set-cookie' => [
            'ts=950667; expires=Wed, 04-May-2022 15:24:21 GMT; Max-Age=34128000; path=/; domain=.dailymotion.com; Secure; SameSite=none;',
            'sid=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'sdx=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'su_user_id=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/',
            'su_sid=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/',
            'su_sdx=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/',
            'client_token=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'access_token=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'refresh_token=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=; Secure; SameSite=none;',
            'v1st=07941783B927D0B323290C9E50E36CAC; expires=Wed, 04 May 2022 15:24:21 GMT; max-age=34128000; path=/; Secure; SameSite=None; domain=.dailymotion.com'
        ],
        'expect-ct' => [
            'max-age=0, report-uri="https://www.dailymotion.com/content_security_policy_report_uri"'
        ],
        'referrer-policy' => [
            'no-referrer-when-downgrade'
        ],
        'content-length' => [
            '309'
        ],
        'Content-Location' => [
            'https://www.dailymotion.com/services/oembed?url=https%3A%2F%2Fwww.dailymotion.com%2Fvideo%2Fxy0wd&format=json'
        ],
        'X-Request-Time' => [
            '0.177 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"video","version":"1.0","provider_name":"Dailymotion","provider_url":"https:\\/\\/www.dailymotion.com","title":"Chats paresseux","description":"","author_name":"jeanbamin","author_url":"https:\\/\\/www.dailymotion.com\\/jeanbamin","width":480,"height":360,"html":"<iframe frameborder=\\"0\\" width=\\"480\\" height=\\"360\\" src=\\"https:\\/\\/www.dailymotion.com\\/embed\\/video\\/xy0wd\\" allowfullscreen allow=\\"autoplay\\"><\\/iframe>","thumbnail_url":"https:\\/\\/s2.dmcdn.net\\/v\\/63aD1VtIdtBWR7nC\\/x240","thumbnail_width":320,"thumbnail_height":240}'
];
