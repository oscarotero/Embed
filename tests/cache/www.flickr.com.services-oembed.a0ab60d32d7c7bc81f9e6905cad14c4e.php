<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'application/json'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:20:43 GMT'
        ],
        'server' => [
            'Apache/2.4.46 (Ubuntu)'
        ],
        'set-cookie' => [
            'xb=704960; expires=Wed, 02-Apr-2031 15:20:43 GMT; Max-Age=315360000; path=/; domain=.flickr.com',
            'localization=es-us%3Bes%3Bes; expires=Sun, 02-Apr-2023 15:20:43 GMT; Max-Age=62899200; path=/; domain=.flickr.com',
            'flrbp=1617549643-08b6aa87fa0832c610b958397b0539b5d89fc1ea; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrbs=1617549643-d7536354333f75db261d58d2215bae53f8cbce0d; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrbgrp=1617549643-97504dbac76107088f347bdca31b32a55a03efa7; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrbgdrp=1617549643-4c0ecf7bb0fa11db07de6f250b5babab5c968654; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrbgmrp=1617549643-becea160460ebaf0c32e5983a82454e039b988a2; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrbrst=1617549643-f3367c56d7ef5f92ac33a95ac0780ae623b0f70b; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrtags=1617549643-4eab3dc0feb0af32c3e22ee7a6e034511e3d9e40; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrbrp=1617549643-babd77315a4b4923edf3cec454598817f2074eb4; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrbrgs=1617549643-14f5692ea3170b223b768fbc8768a31fb807c3b0; expires=Fri, 01-Oct-2021 15:20:43 GMT; Max-Age=15552000; path=/; domain=.flickr.com; HttpOnly',
            'flrb=29; expires=Sun, 04-Apr-2021 17:20:43 GMT; Max-Age=7200; path=/; domain=.flickr.com; HttpOnly',
            'ccc=%7B%22managed%22%3A0%2C%22changed%22%3A0%2C%22info%22%3A%7B%22cookieBlock%22%3A%7B%22level%22%3A0%2C%22blockRan%22%3A1%7D%7D%7D; expires=Tue, 04-May-2021 15:20:43 GMT; Max-Age=2592000; path=/; domain=.flickr.com'
        ],
        'content-security-policy' => [
            'default-src \'unsafe-inline\' https://*.flickr.com https://*.staticflickr.com https://*.flickr.net https://*.braintreegateway.com https://*.kaptcha.com https://*.paypal.com http://api.flickr.com https://*.pinterest.com https://connect.facebook.net https://*.facebook.com https://*.maps.api.here.com https://*.maps.cit.api.here.com https://cdn.siftscience.com https://tpc.googlesyndication.com https://securepubads.g.doubleclick.net https://adservice.google.com https://cdn.ampproject.org https://trustarc.mgr.consensu.org/ https://*.trustarc.com; img-src data: blob: https://*.flickr.com https://*.flickr.net http://*.flickr.net https://*.staticflickr.com http://*.staticflickr.com https://*.yimg.com https://*.yahoo.com https://image.maps.api.here.com https://*.paypal.com https://*.pinterest.com http://*.static-alpha.flickr.com https://connect.facebook.net https://*.facebook.com https://*.maps.api.here.com https://*.maps.cit.api.here.com https://creativecommons.org https://hexagon-analytics.com https://*.2o7.net https://tagmanager.google.com https://www.googletagmanager.com https://*.google.com https://*.google-analytics.com https://*.googleadservices.com https://*.googlesyndication.com https://*.doubleclick.com https://*.doubleclick.de https://*.doubleclick.net https://*.googletagservices.com https://*.googleadservices.com https://*.googlesyndication.com https://*.googleapis.com https://api.mapbox.com https://*.trustarc.com; script-src \'unsafe-eval\' \'unsafe-inline\' https://*.flickr.com http://*.flickr.net https://*.flickr.net https://*.staticflickr.com https://*.analytics.yahoo.com https://yep.video.yahoo.com https://video.media.yql.yahoo.com https://*.yahooapis.com https://*.braintreegateway.com https://*.paypalobjects.com https://connect.facebook.net https://*.facebook.com https://*.maps.api.here.com https://*.maps.cit.api.here.com https://cdn.siftscience.com https://assets.adobedtm.com https://securepubads.g.doubleclick.net https://adservice.google.com https://cdn.ampproject.org https://*.google.com https://*.google-analytics.com https://*.googleadservices.com https://*.googlesyndication.com https://*.doubleclick.com https://*.doubleclick.de https://*.doubleclick.net https://*.googletagservices.com https://*.googleadservices.com https://*.googlesyndication.com https://*.googleapis.com https://consent.trustarc.com https://trustarc.mgr.consensu.org https://www.googletagmanager.com; connect-src https://*.flickr.com https://*.flickr.net http://*.flickr.net https://*.staticflickr.com https://geo.query.yahoo.com https://*.yahooapis.com http://api.flickr.com https://*.pinterest.com http://*.yahoo.com https://*.maps.api.here.com https://*.maps.cit.api.here.com https://cdn.siftscience.com https://*.demdex.net https://securepubads.g.doubleclick.net https://*.trustarc.com; report-uri https://csp.flickr.com/beacon/csp?src=adsecflickr;'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'x-cache' => [
            'Miss from cloudfront'
        ],
        'via' => [
            '1.1 713e5c81a0f7ad564b97cf451e92aaac.cloudfront.net (CloudFront)'
        ],
        'x-amz-cf-pop' => [
            'MAD50-C1'
        ],
        'x-amz-cf-id' => [
            'p3TO8U8PfrFpx-2Y9FX0hRvnoM0Pb4iAAVEWZYV6VHWuwBqXQvE6Fw=='
        ],
        'Content-Location' => [
            'https://www.flickr.com/services/oembed/?format=json&url=https%3A%2F%2Fwww.flickr.com%2Fphotos%2Fdesescribir%2Fsets%2F72157650686499888'
        ],
        'X-Request-Time' => [
            '0.533 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"rich","flickr_type":"album","title":"G\\u00fcnther F\\u00f6rg. Verfolgen Malerei \\/ Fundaci\\u00f3n Lu\\u00eds Seoane","author_name":"desescribir","author_url":"https:\\/\\/www.flickr.com\\/photos\\/desescribir\\/","width":800,"height":600,"web_page":"https:\\/\\/www.flickr.com\\/photos\\/desescribir\\/sets\\/72157650686499888","thumbnail_url":"https:\\/\\/live.staticflickr.com\\/8572\\/16055522574_ce77fde14e_b.jpg","thumbnail_width":800,"thumbnail_height":600,"web_page_short_url":"https:\\/\\/flic.kr\\/s\\/aHsk8hUbqq","license_url":"https:\\/\\/creativecommons.org\\/licenses\\/by-nc-nd\\/2.0\\/","html":"<a data-flickr-embed=\'true\' href=\'https:\\/\\/www.flickr.com\\/photos\\/desescribir\\/sets\\/72157650686499888\' title=\'G\\u00fcnther F\\u00f6rg. Verfolgen Malerei \\/ Fundaci\\u00f3n Lu\\u00eds Seoane by desescribir, on Flickr\'><img src=\'https:\\/\\/live.staticflickr.com\\/8572\\/16055522574_ce77fde14e_b.jpg\' width=\'800\' height=\'600\' alt=\'G\\u00fcnther F\\u00f6rg. Verfolgen Malerei \\/ Fundaci\\u00f3n Lu\\u00eds Seoane\'><\\/a><script async src=\'https:\\/\\/embedr.flickr.com\\/assets\\/client-code.js\' charset=\'utf-8\'><\\/script>","version":"1.0","cache_age":3600,"provider_name":"Flickr","provider_url":"https:\\/\\/www.flickr.com\\/"}
'
];
