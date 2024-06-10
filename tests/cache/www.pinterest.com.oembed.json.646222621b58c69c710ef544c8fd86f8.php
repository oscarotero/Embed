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
        'reporting-endpoints' => [
            'coop-endpoint="https://www.pinterest.com/_/_/coop_report/", coep-endpoint="https://www.pinterest.com/_/_/coep_report/"'
        ],
        'cross-origin-opener-policy-report-only' => [
            'same-origin; report-to="coop-endpoint"'
        ],
        'content-security-policy' => [
            'default-src \'self\' blob: s.pinimg.com; font-src \'self\' s.pinimg.com data: fonts.googleapis.com fonts.gstatic.com use.typekit.net; style-src \'self\' blob: \'unsafe-inline\' data: *.pinimg.com *.pinterest.com accounts.google.com fonts.googleapis.com *.adyen.com *.adyenpayments.com; img-src blob: data: *; base-uri \'none\'; connect-src \'self\' blob: *.pinimg.com *.pinterest.com accounts.google.com *.adyen.com pinterest-salvador.s3.amazonaws.com *.adyenpayments.com *.facebook.com www.googleapis.com *.dropboxapi.com pinterest-aberdeen.s3.amazonaws.com pinterest-aberdeen.s3.us-east-1.amazonaws.com pinterest-anaheim.s3.amazonaws.com pinterest-anaheim.s3.us-east-1.amazonaws.com pinterest-hilo.s3.amazonaws.com pinterest-hilo.s3.us-east-1.amazonaws.com pinterest-sim-toontown.s3.amazonaws.com pinterest-sim-toontown.s3.us-east-1.amazonaws.com pinterest-media-upload.s3.amazonaws.com pinterest-media-upload.s3.us-east-1.amazonaws.com pinterest-media-upload.s3-accelerate.amazonaws.com pinterest-media-upload.s3-accelerate.us-east-1.amazonaws.com pinterest-milwaukee.s3.amazonaws.com pinterest-milwaukee.s3.us-east-1.amazonaws.com pinterest-poughkeepsie.s3.amazonaws.com pinterest-poughkeepsie.s3.us-east-1.amazonaws.com pinterest-waterloo.s3.amazonaws.com pinterest-waterloo.s3.us-east-1.amazonaws.com pinterest-plymouth.s3.amazonaws.com pinterest-plymouth.s3.us-east-1.amazonaws.com pinterest-salvador.s3.us-east-1.amazonaws.com pinterest-yamagata.s3.amazonaws.com pinterest-yamagata.s3.us-east-1.amazonaws.com *.cedexis.com *.cedexis-radar.net *.tvpixel.com api.pinadmin.com *.live-video.net https://*.daily.co https://*.pluot.blue wss://*.wss.daily.co; form-action \'self\' *.adyen.com *.sofort.com *.tink.com *.adyenpayments.com; frame-src \'self\' *.pinimg.com *.pinterest.com *.adyen.com static-sandbox.dlocal.com static.dlocal.com *.google.com *.facebook.com www.recaptcha.net pinterest-hilo.s3.amazonaws.com pinterest-hilo.s3.us-east-1.amazonaws.com pinterest-sim-toontown.s3.amazonaws.com pinterest-sim-toontown.s3.us-east-1.amazonaws.com pinterest-milwaukee.s3.amazonaws.com pinterest-milwaukee.s3.us-east-1.amazonaws.com pinterest-waterloo.s3.amazonaws.com pinterest-waterloo.s3.us-east-1.amazonaws.com pinterest-tolu.s3.amazonaws.com *.pinterdev.com content.googleapis.com *.youtube.com *.youtube-nocookie.com *.ytimg.com player.vimeo.com calendly.com vine.co bid.g.doubleclick.net *.fls.doubleclick.net pinlogs.s3.amazonaws.com pinlogs.s3.us-east-1.amazonaws.com advertising-delivery-metric-reports.s3.amazonaws.com advertising-delivery-metric-reports.s3.us-east-1.amazonaws.com servedby.flashtalking.com pinterest-uk.admo.tv pinterest-uk-web.admo.tv fbrpc://call *.linkedin.com px.ads.linkedin.com; media-src \'self\' blob: data: *.pinimg.com *.live-video.net; object-src \'self\'; script-src \'nonce-41f84319db0cb238dc162c36c80c3212\' \'strict-dynamic\' \'self\' blob: \'unsafe-inline\' *.pinimg.com *.pinterest.com *.adyen.com js.dlocal.com js-sandbox.dlocal.com static-sandbox.dlocal.com static.dlocal.com *.adyenpayments.com \'report-sample\' *.google.com connect.facebook.net *.google-analytics.com *.facebook.com *.googleadservices.com *.doubleclick.net *.googletagmanager.com radar.cedexis.com *.cedexis-test.com www.gstatic.com/recaptcha/ www.gstatic.cn/recaptcha/ www.recaptcha.net \'wasm-unsafe-eval\'; worker-src \'self\' blob: \'unsafe-inline\'; report-uri /_/_/csp_report/?rid=1253678817280813; frame-ancestors \'self\' , script-src \'self\' blob: \'unsafe-inline\' *.pinimg.com *.pinterest.com *.adyen.com js.dlocal.com js-sandbox.dlocal.com static-sandbox.dlocal.com static.dlocal.com *.adyenpayments.com \'report-sample\' *.google.com connect.facebook.net *.google-analytics.com *.facebook.com *.googleadservices.com *.doubleclick.net *.googletagmanager.com radar.cedexis.com *.cedexis-test.com www.gstatic.com/recaptcha/ www.gstatic.cn/recaptcha/ www.recaptcha.net \'wasm-unsafe-eval\'; report-uri /_/_/csp_report/?rid=1253678817280813'
        ],
        'content-security-policy-report-only' => [
            'img-src \'self\' blob: data: *.pinimg.com *.pinterest.com *.google.com *.facebook.com *.cedexis.com *.cedexis-test.com *.citrix.com *.tvpixel.com; report-uri /_/_/csp_report/?reportonly'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'origin-trial' => [
            'AvlUIFJouPpJAKljRGh7EnYm2Brnx/eu51h39Z7p11vbzNlw2YhkUhxvxZdkS709VlGGNw4Gcg/a9mAzHDrEcQ0AAAB5eyJvcmlnaW4iOiJodHRwczovL3BpbnRlcmVzdC5jb206NDQzIiwiZmVhdHVyZSI6IlNlbmRGdWxsVXNlckFnZW50QWZ0ZXJSZWR1Y3Rpb24iLCJleHBpcnkiOjE2ODQ4ODYzOTksImlzU3ViZG9tYWluIjp0cnVlfQ=='
        ],
        'accept-ch' => [
            'Sec-CH-UA-Full,Sec-CH-UA-Full-Version-List,Sec-CH-UA-Model,Sec-CH-UA-Platform-Version'
        ],
        'cache-control' => [
            'max-age=259200'
        ],
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'x-envoy-upstream-service-time' => [
            '126'
        ],
        'referrer-policy' => [
            'origin'
        ],
        'x-pinterest-rid' => [
            '1253678817280813'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:59:19 GMT'
        ],
        'vary' => [
            'User-Agent, Accept-Encoding'
        ],
        'x-cdn' => [
            'fastly'
        ],
        'alt-svc' => [
            'h3=":443";ma=600'
        ],
        'pinterest-generated-by' => [
            'coreapp-webapp-prod-0a011986'
        ],
        'pinterest-version' => [
            'f8146f7'
        ],
        'content-length' => [
            '550'
        ],
        'Content-Location' => [
            'https://www.pinterest.com/oembed.json?url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F106890191127977979%2F&format=json'
        ],
        'X-Request-Time' => [
            '0.319 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":"1.0","type":"rich","provider_name":"Pinterest","provider_url":"https://www.pinterest.com","width":450,"height":663,"title":"Pourparler","author_name":"Leslie Carruthers","author_url":"https://www.pinterest.com/thesearchguru/","html":"<iframe src=\\"https://assets.pinterest.com/ext/embed.html?id=106890191127977979&src=oembed\\" height=\\"663\\" width=\\"450\\" frameborder=\\"0\\" scrolling=\\"no\\" ></iframe>","thumbnail_url":"https://i.pinimg.com/236x/b5/34/13/b53413787f3a42c8b9d5b08a6fbb2124.jpg","thumbnail_width":236,"thumbnail_height":295}'
];
