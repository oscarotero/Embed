<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'text/x-javascript; charset=utf-8'
        ],
        'content-length' => [
            '1029'
        ],
        'access-control-allow-methods' => [
            'GET'
        ],
        'access-control-allow-origin' => [
            '*'
        ],
        'cache-control' => [
            'private,no-cache'
        ],
        'content-security-policy' => [
            'default-src \'self\' https:; base-uri \'self\'; block-all-mixed-content; child-src \'self\' https: blob:; connect-src \'self\' wss: https: blob:; font-src \'self\' data: https:; form-action \'self\' forms.hsforms.com www.facebook.com; frame-ancestors \'self\' app.optimizely.com *.eventbrite.com video214.com animoto.com; img-src \'self\' data: https: blob: android-webview-video-poster:; manifest-src \'self\'; media-src \'self\' https: data: blob:; object-src \'self\' www.paypalobjects.com d150hyw1dtprld.cloudfront.net; prefetch-src \'self\' https:; script-src \'self\' https: data: \'unsafe-inline\' \'unsafe-eval\'; style-src \'self\' https: \'unsafe-inline\'; upgrade-insecure-requests; worker-src \'self\' blob:; report-uri https://sentry.io/api/1401029/security/?sentry_key=b94ac67e5c014425a0fe8cb868528601'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:21:42 GMT'
        ],
        'etag' => [
            'W/"5b8e1a3b7ef622367472f865b6dcf16d"'
        ],
        'referrer-policy' => [
            'origin-when-cross-origin'
        ],
        'set-cookie' => [
            '__ld_hash_key=fjRF3YCKjoAmkTUi54%2FDbhpC3HY4I6hytTT8m8%2BMp40%3D; path=/; secure; SameSite=Lax',
            'uuid=bb5e259cb796046635288d6d7a7e771e; domain=.animoto.com; path=/; expires=Fri, 04 Apr 2031 15:21:42 -0000; secure; HttpOnly; SameSite=Lax',
            '_animoto.com_session=BAh7CEkiD3Nlc3Npb25faWQGOgZFVEkiJTBhZGE0M2Q1MWM1ZWI5Yzc4YWJkMGNkMmM4MzI4M2Q0BjsAVEkiDnVzZXJfcGxhbgY7AEZJIgx2aXNpdG9yBjsAVEkiEWNvdW50cnlfY29kZQY7AEZJIgdFUwY7AFQ%3D--24b9f920e95f77bda4fff0c1a65bdae124966c12; path=/; secure; HttpOnly; SameSite=Lax'
        ],
        'strict-transport-security' => [
            'max-age=2592000'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-download-options' => [
            'noopen'
        ],
        'x-envoy-decorator-operation' => [
            'web2-http.production.svc.cluster.local:8000/*'
        ],
        'x-envoy-upstream-service-time' => [
            '263'
        ],
        'x-frame-options' => [
            'ALLOW-FROM https://app.optimizely.com'
        ],
        'x-permitted-cross-domain-policies' => [
            'none'
        ],
        'x-request-id' => [
            '05b30c1210f7a595a07d4ffb7133ae55'
        ],
        'x-runtime' => [
            '0.261467'
        ],
        'x-served-by' => [
            'nginx-ingress-controller-68b4bf9c-7sdbh'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-cache' => [
            'Miss from cloudfront'
        ],
        'via' => [
            '1.1 40f375a15596f8d7b418a9c5dccce3d3.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD51-C1'
        ],
        'x-amz-cf-id' => [
            'zU4_lRS3BnOXChw4CIzxRlWQ1N3LL2AyHW6nJCuRGBc1OZedMMc0Tw=='
        ],
        'Content-Location' => [
            'https://animoto.com/oembeds/create.json?automated=true&options=start_hq&url=https%3A%2F%2Fanimoto.com%2Fplay%2FGjsJ1gu0WDRfr4pGw12xZQ'
        ],
        'X-Request-Time' => [
            '0.873 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"provider_name":"Animoto","provider_url":"https://animoto.com/","type":"video","author_name":null,"title":"taco bell","description":"","thumbnail_url":"https://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_648x360.jpg","thumbnail_height":360,"thumbnail_width":648,"icon_url":"https://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_224x126.jpg","icon_height":54,"icon_width":54,"width":640,"height":360,"cache_age":604800,"video_url":"https://d150hyw1dtprld.cloudfront.net/swf/w.swf?w=swf/production/vp1&e=1617549702&f=GjsJ1gu0WDRfr4pGw12xZQ&d=0&m=p&r=360p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=start_hq","html":"<iframe id=\\"vp1GjsJ1\\" title=\\"Video Player\\" width=\\"640\\" height=\\"360\\" frameborder=\\"0\\" src=\\"https://s3.amazonaws.com/embed.animoto.com/play.html?w=swf/production/vp1&e=1617549702&f=GjsJ1gu0WDRfr4pGw12xZQ&d=0&m=p&r=360p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=start_hq\\" allowfullscreen></iframe>"}'
];
