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
            'Wed, 20 May 2020 17:53:09 GMT'
        ],
        'etag' => [
            'W/"128c48bd9bf19eef7a2f498d8b3fd06f"'
        ],
        'referrer-policy' => [
            'origin-when-cross-origin'
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
            '209'
        ],
        'x-frame-options' => [
            'ALLOW-FROM https://app.optimizely.com'
        ],
        'x-permitted-cross-domain-policies' => [
            'none'
        ],
        'x-request-id' => [
            'f1a95949ccad0e42051f89bd3b309786'
        ],
        'x-runtime' => [
            '0.207826'
        ],
        'x-served-by' => [
            'nginx-ingress-controller-68b4bf9c-zn7p5'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-cache' => [
            'Miss from cloudfront'
        ],
        'via' => [
            '1.1 950bb8c57b98d41ce5118fe9b4561e37.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD51-C1'
        ],
        'x-amz-cf-id' => [
            'oWpBURK5bOSttReEaYL0aM8cnKzXafKw1O80S7RgyH_51EaiV0sHSA=='
        ],
        'Content-Location' => [
            'https://animoto.com/oembeds/create.json?automated=true&options=start_hq&url=https%3A%2F%2Fanimoto.com%2Fplay%2FGjsJ1gu0WDRfr4pGw12xZQ'
        ],
        'X-Request-Time' => [
            '0.631 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"provider_name":"Animoto","provider_url":"https://animoto.com/","type":"video","author_name":null,"title":"taco bell","description":"","thumbnail_url":"https://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_648x360.jpg","thumbnail_height":360,"thumbnail_width":648,"icon_url":"https://d2m23yiuv18ohn.cloudfront.net/Video/GjsJ1gu0WDRfr4pGw12xZQ/cover_224x126.jpg","icon_height":54,"icon_width":54,"width":640,"height":360,"cache_age":604800,"video_url":"https://d150hyw1dtprld.cloudfront.net/swf/w.swf?w=swf/production/vp1&e=1589997189&f=GjsJ1gu0WDRfr4pGw12xZQ&d=0&m=p&r=360p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=start_hq","html":"<iframe id=\\"vp1GjsJ1\\" title=\\"Video Player\\" width=\\"640\\" height=\\"360\\" frameborder=\\"0\\" src=\\"https://s3.amazonaws.com/embed.animoto.com/play.html?w=swf/production/vp1&e=1589997189&f=GjsJ1gu0WDRfr4pGw12xZQ&d=0&m=p&r=360p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=start_hq\\" allowfullscreen></iframe>"}'
];
