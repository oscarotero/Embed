<?php
declare(strict_types = 1);

return [
    'headers' => [
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'strict-transport-security' => [
            'max-age=63072000; includeSubDomains; preload'
        ],
        'x-ua-compatible' => [
            'IE=edge'
        ],
        'expect-ct' => [
            'max-age=86400, report-uri="https://www.pinterest.com/_/_/expect_ct_report/"'
        ],
        'set-cookie' => [
            'csrftoken=51e3b6e5b6c45e1798dc7c76d1572841; path=/; expires=Sun, 09 Oct 2022 00:05:33 GMT; samesite=lax; secure',
            '_pinterest_sess=TWc9PSZqUWxMaVZJUkRSQWRtcVBTeFNmTzJEQ2gwZE9taFd2U2xMNVVPNzZSQ0RMUVZGUzBsRCtpK1dWamg3VnhHRVYzbjlRcUppaXZIU0RsTkIrL0Q1dUlWNm5NaW9HaHlsT3BJM0hQdGduRk1QNVUwSnBJVEdVb0o2dXpHNFIvK29JcyYrQThsYS8rNzNJVXo1QzlRbVBKc1BVMFBpZFU9; path=/; expires=Tue, 04 Oct 2022 00:05:33 GMT; domain=.pinterest.com; samesite=none; secure; httponly',
            '_auth=0; path=/; expires=Tue, 04 Oct 2022 00:05:33 GMT; domain=.pinterest.com; secure; httponly',
            '_routing_id="b476c349-e06e-4ad9-8c92-7a20403782c5"; Max-Age=86400; Path=/; HttpOnly'
        ],
        'p3p' => [
            'CP="This is not a P3P policy. See https://www.pinterest.com/_/_/help/articles/pinterest-and-p3p for more info."'
        ],
        'content-security-policy' => [
            'default-src \'self\' \'unsafe-inline\' blob: data: *.pinimg.com *.pinterest.com accounts.google.com fonts.gstatic.com fonts.googleapis.com use.typekit.net *.adyen.com *.adyenpayments.com; img-src * data: blob:; script-src \'nonce-0d2a8ef165d784642d971d018b4dc29d\' \'strict-dynamic\' \'report-sample\' \'self\' *.pinterest.com *.pinimg.com *.google.com connect.facebook.net *.google-analytics.com *.facebook.com *.googleadservices.com *.doubleclick.net *.googletagmanager.com *.adyen.com *.adyenpayments.com cdn.ampproject.org *.cdn.ampproject.org radar.cedexis.com *.cedexis-test.com www.gstatic.com/recaptcha/ www.recaptcha.net \'unsafe-inline\'; connect-src \'self\' *.pinimg.com *.pinterest.com accounts.google.com *.facebook.com *.dropboxapi.com *.adyen.com *.adyenpayments.com cdn.ampproject.org *.cdn.ampproject.org pinterest-aberdeen.s3.amazonaws.com pinterest-aberdeen.s3.us-east-1.amazonaws.com pinterest-anaheim.s3.amazonaws.com pinterest-anaheim.s3.us-east-1.amazonaws.com pinterest-media-upload.s3.amazonaws.com pinterest-media-upload.s3.us-east-1.amazonaws.com pinterest-media-upload.s3-accelerate.amazonaws.com pinterest-media-upload.s3-accelerate.us-east-1.amazonaws.com pinterest-milwaukee.s3.amazonaws.com pinterest-milwaukee.s3.us-east-1.amazonaws.com pinterest-poughkeepsie.s3.amazonaws.com pinterest-poughkeepsie.s3.us-east-1.amazonaws.com pinterest-waterloo.s3.amazonaws.com pinterest-waterloo.s3.us-east-1.amazonaws.com pinterest-plymouth.s3.amazonaws.com pinterest-plymouth.s3.us-east-1.amazonaws.com *.cedexis.com *.cedexis-radar.net blob: *.tvpixel.com api.pinadmin.com; media-src \'self\' *.pinimg.com blob: data:; object-src \'self\'; form-action \'self\'; frame-src \'self\' *.google.com *.pinimg.com *.pinterest.com *.pinterdev.com *.facebook.com content.googleapis.com *.adyen.com *.youtube.com *.ytimg.com player.vimeo.com calendly.com vine.co bid.g.doubleclick.net *.fls.doubleclick.net pinterest-milwaukee.s3.amazonaws.com pinterest-milwaukee.s3.us-east-1.amazonaws.com pinterest-waterloo.s3.amazonaws.com pinterest-waterloo.s3.us-east-1.amazonaws.com pinlogs.s3.amazonaws.com pinlogs.s3.us-east-1.amazonaws.com pinterest-hilo.s3.us-east-1.amazonaws.com pinterest-hilo.s3.amazonaws.com advertising-delivery-metric-reports.s3.amazonaws.com advertising-delivery-metric-reports.s3.us-east-1.amazonaws.com servedby.flashtalking.com pinterest-uk.admo.tv pinterest-uk-web.admo.tv fbrpc://call www.recaptcha.net www-pinterest-com.cdn.ampproject.org; worker-src \'self\' blob: https://www-pinterest-com.cdn.ampproject.org \'unsafe-inline\'; base-uri \'none\'; report-uri /_/_/csp_report/?rid=1494410597907320; frame-ancestors \'self\''
        ],
        'content-security-policy-report-only' => [
            'script-src \'nonce-0d2a8ef165d784642d971d018b4dc29d\' \'strict-dynamic\' \'report-sample\' \'self\' *.pinterest.com *.pinimg.com *.google.com connect.facebook.net *.google-analytics.com *.facebook.com *.googleadservices.com *.doubleclick.net *.googletagmanager.com *.adyen.com *.adyenpayments.com cdn.ampproject.org *.cdn.ampproject.org radar.cedexis.com *.cedexis-test.com www.gstatic.com/recaptcha/ www.recaptcha.net \'unsafe-inline\'; report-uri /_/_/csp_report/?reportonly , script-src \'report-sample\' \'self\' *.pinterest.com *.pinimg.com *.google.com connect.facebook.net *.google-analytics.com *.facebook.com *.googleadservices.com *.doubleclick.net *.googletagmanager.com *.adyen.com *.adyenpayments.com cdn.ampproject.org *.cdn.ampproject.org radar.cedexis.com *.cedexis-test.com www.gstatic.com/recaptcha/ www.recaptcha.net \'unsafe-inline\'; default-src \'self\' \'unsafe-inline\' blob: data: *.pinimg.com *.pinterest.com accounts.google.com fonts.gstatic.com fonts.googleapis.com use.typekit.net; frame-src *; img-src * data: blob:; connect-src *; worker-src * blob:; report-uri /_/_/csp_report/?reportonly'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'cache-control' => [
            'max-age=259200'
        ],
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'x-envoy-upstream-service-time' => [
            '355'
        ],
        'referrer-policy' => [
            'origin'
        ],
        'x-pinterest-rid' => [
            '1494410597907320'
        ],
        'date' => [
            'Sat, 09 Oct 2021 00:05:33 GMT'
        ],
        'vary' => [
            'User-Agent, Accept-Encoding'
        ],
        'x-cdn' => [
            'fastly'
        ],
        'pinterest-generated-by' => [
            'coreapp-webapp-prod-0a03a028'
        ],
        'pinterest-version' => [
            '64fd4a2'
        ],
        'content-length' => [
            '580'
        ],
        'Content-Location' => [
            'https://www.pinterest.com/oembed.json?url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F106890191127977979%2F&format=json'
        ],
        'X-Request-Time' => [
            '0.582 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":"1.0","type":"rich","provider_name":"Pinterest","provider_url":"https://www.pinterest.com","width":450,"height":663,"title":"Pourparler","author_name":"Leslie Carruthers","author_url":"https://www.pinterest.com/thesearchguru/","html":"<iframe src=\\"https://assets.pinterest.com/ext/embed.html?id=106890191127977979&src=oembed\\" height=\\"663\\" width=\\"450\\" frameborder=\\"0\\" scrolling=\\"no\\" ></iframe>","thumbnail_url":"https://i.pinimg.com/236x/b5/34/13/b53413787f3a42c8b9d5b08a6fbb2124--jack-nicholson-jack-oconnell.jpg","thumbnail_width":236,"thumbnail_height":295}'
];
