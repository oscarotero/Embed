<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'Varnish',
            'nginx'
        ],
        'retry-after' => [
            '0'
        ],
        'location' => [
            'https://www.scribd.com/services/oembed/?url=https%3A%2F%2Fwww.scribd.com%2Fdocument%2F110799637%2FSynthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests&format=json'
        ],
        'content-length' => [
            '0'
        ],
        'accept-ranges' => [
            'bytes',
            'bytes'
        ],
        'date' => [
            'Sun, 23 Feb 2020 00:01:34 GMT',
            'Sun, 23 Feb 2020 00:01:34 GMT'
        ],
        'via' => [
            '1.1 varnish',
            '1.1 varnish'
        ],
        'connection' => [
            'close'
        ],
        'x-served-by' => [
            'cache-mad22021-MAD',
            'cache-mad22047-MAD'
        ],
        'x-cache' => [
            'HIT',
            'MISS'
        ],
        'x-cache-hits' => [
            '0',
            '0'
        ],
        'x-timer' => [
            'S1582416094.079984,VS0,VE0'
        ],
        'set-cookie' => [
            'scribd_ubtc=u%3Dd7bf1189-a05e-4283-8ff6-a370f137b2fb%26h%3Do%2B995rzqursRpjFnWRfiVhmxEMmZjX8mogEaHBQBWz0%3D; Domain=.scribd.com; Path=/; Expires=Tue, 30 Jan 2120 00:01:34 GMT; Secure  HTTP/2 200',
            '_scribd_session=eyJzZXNzaW9uX2lkIjoiMGFmNjE0YTA4YmM4MWFmMWUzNTkyN2U5OTlkN2E1ODAifQ%3D%3D--5e76f3887e995f23591337d3a86273ccbaeeafd8; domain=.scribd.com; path=/; expires=Thu, 23 Feb 2023 00:01:34 -0000; secure; HttpOnly'
        ],
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'status' => [
            '200 OK'
        ],
        'x-frame-options' => [
            'SAMEORIGIN',
            'SAMEORIGIN'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'content-security-policy' => [
            'frame-ancestors \'self\''
        ],
        'cache-control' => [
            'no-cache, no-store, max-age=0, must-revalidate'
        ],
        'x-request-id' => [
            'ef53c3351504d2d2df692a938e2dddfdb089dd1882f1fc6201c2170a6346500a'
        ],
        'x-runtime' => [
            '0.028825'
        ],
        'strict-transport-security' => [
            'max-age=0'
        ],
        'content-encoding' => [
            'br'
        ],
        'vary' => [
            'Accept-Encoding, X-Language-Locale'
        ],
        'Content-Location' => [
            'https://www.scribd.com/services/oembed/?url=https%3A%2F%2Fwww.scribd.com%2Fdocument%2F110799637%2FSynthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests&format=json'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"rich","version":"1.0","provider_name":"Scribd","provider_url":"https://www.scribd.com/","cache_age":604800,"title":"Synthesis of Knowledge: Effects of Fire and Thinning Treatments on Understory Vegetation in Dry U.S. Forests","author_name":"Joint Fire Science Program","author_url":"https://www.scribd.com/user/151878975/Joint-Fire-Science-Program","thumbnail_url":"https://imgv2-2-f.scribdassets.com/img/document/110799637/111x142/9fc8621525/1582416094?v=1","thumbnail_width":164,"thumbnail_height":212,"html":"\\u003ciframe class=\\"scribd_iframe_embed\\" src=\\"https://www.scribd.com/embeds/110799637/content\\" data-aspect-ratio=\\"1.2941176470588236\\" scrolling=\\"no\\" id=\\"110799637\\" width=\\"100%\\" height=\\"500\\" frameborder=\\"0\\"\\u003e\\u003c/iframe\\u003e\\u003cscript type=\\"text/javascript\\"\\u003e\\n          (function() { var scribd = document.createElement(\\"script\\"); scribd.type = \\"text/javascript\\"; scribd.async = true; scribd.src = \\"https://www.scribd.com/javascripts/embed_code/inject.js\\"; var s = document.getElementsByTagName(\\"script\\")[0]; s.parentNode.insertBefore(scribd, s); })()\\n        \\u003c/script\\u003e"}'
];
