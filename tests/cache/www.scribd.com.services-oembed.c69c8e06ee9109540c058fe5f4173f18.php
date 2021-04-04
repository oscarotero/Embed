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
            'Sun, 04 Apr 2021 15:27:41 GMT',
            'Sun, 04 Apr 2021 15:27:41 GMT'
        ],
        'via' => [
            '1.1 varnish',
            '1.1 varnish'
        ],
        'connection' => [
            'close'
        ],
        'x-served-by' => [
            'cache-mad22074-MAD',
            'cache-mad22070-MAD'
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
            'S1617550061.425141,VS0,VE0'
        ],
        'set-cookie' => [
            'nway=9b4b3d62-7d1f-4c02-a8c9-1fdc44cd2a8d; max-age=86400; path=/; secure; httponly',
            'scribd_ubtc=u%3Db406a08f-1a76-42d8-b3c9-452a0945a983%26h%3DvPUxOApOOg1XJZc7%2BgKWhpVNKFeEitiohVoEVuSQA%2B8%3D; Domain=.scribd.com; Path=/; Expires=Tue, 11 Mar 2121 15:27:41 GMT; Secure  HTTP/2 200',
            'scribd_ubtc=u%3D875155d3-ce43-4fce-b053-61000c029946%26h%3DJCUzf2g%2B8WLGLcsX7Uxln16T1DmBLh5cyoBHT%2BPYxPA%3D; domain=.scribd.com; path=/; expires=Fri, 04 Apr 2036 15:27:41 GMT; secure',
            '_scribd_session=eyJzZXNzaW9uX2lkIjoiYzM5ZTlkNTQwZWMyODYxZDBkOTdiNzI3NzRjYmFkNTAifQ%3D%3D--7ace03e75a7eee27d2f73dab884b4a4f7be0befc; domain=.scribd.com; path=/; expires=Thu, 04 Apr 2024 15:27:41 GMT; secure; HttpOnly',
            'nway=7b1bfd1a-4dac-4a74-9e4b-b9dbc1794f17; max-age=86400; path=/; secure; httponly'
        ],
        'cache-control' => [
            'no-store',
            'no-store'
        ],
        'vary' => [
            '',
            'Accept-Encoding, X-Language-Locale'
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
        'x-request-id' => [
            '9b2efdd38def9d3618c3fd98c93fe5d5ef097a15610b78c29205ad50a514a6a2'
        ],
        'x-runtime' => [
            '0.034203'
        ],
        'strict-transport-security' => [
            'max-age=63072000; includeSubDomains; preload'
        ],
        'content-encoding' => [
            'br'
        ],
        'Content-Location' => [
            'https://www.scribd.com/services/oembed/?url=https%3A%2F%2Fwww.scribd.com%2Fdocument%2F110799637%2FSynthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests&format=json'
        ],
        'X-Request-Time' => [
            '0.244 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"type":"rich","version":"1.0","provider_name":"Scribd","provider_url":"https://www.scribd.com/","cache_age":604800,"title":"Synthesis of Knowledge: Effects of Fire and Thinning Treatments on Understory Vegetation in Dry U.S. Forests","author_name":"Joint Fire Science Program","author_url":"https://www.scribd.com/user/151878975/Joint-Fire-Science-Program","thumbnail_url":"https://imgv2-2-f.scribdassets.com/img/document/110799637/111x142/9fc8621525/1617346919?v=1","thumbnail_width":164,"thumbnail_height":212,"html":"\\u003ciframe class=\\"scribd_iframe_embed\\" src=\\"https://www.scribd.com/embeds/110799637/content\\" data-aspect-ratio=\\"1.2941176470588236\\" scrolling=\\"no\\" id=\\"110799637\\" width=\\"100%\\" height=\\"500\\" frameborder=\\"0\\"\\u003e\\u003c/iframe\\u003e\\u003cscript type=\\"text/javascript\\"\\u003e\\n          (function() { var scribd = document.createElement(\\"script\\"); scribd.type = \\"text/javascript\\"; scribd.async = true; scribd.src = \\"https://www.scribd.com/javascripts/embed_code/inject.js\\"; var s = document.getElementsByTagName(\\"script\\")[0]; s.parentNode.insertBefore(scribd, s); })()\\n        \\u003c/script\\u003e"}'
];
