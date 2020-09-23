<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx'
        ],
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'x-janus-mini-api-forward' => [
            'Janus-Mini(fast)'
        ],
        'x-krakend' => [
            'Version 2'
        ],
        'x-krakend-completed' => [
            'false'
        ],
        'strict-transport-security' => [
            'max-age=31536000'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-download-options' => [
            'noopen'
        ],
        'content-security-policy-report-only' => [
            'default-src \'self\' data: blob: *.tiktokcdn.com *.akamaized.net *.tiktok.com *.byteoversea.com *.ibytedtos.com *.tiktokcdn-in.com;connect-src *.google-analytics.com *.ibytedtos.com *.bytedanceapi.com *.tiktokv.com *.tiktok.com *.byteoversea.com *.tiktokcdn.com *.tiktokcdn-in.com *.hypstarcdn.com *.ipstatp.com *.bytedance.com;script-src data: blob: \'unsafe-inline\' \'unsafe-eval\' *.byteoversea.com *.ibytedtos.com *.ipstatp.com *.tiktok.com *.tiktokcdn-in.com *.tiktokcdn.com *.hypstarcdn.com *.googletagmanager.com *.google-analytics.com *.akamaized.com *.googleapis.com *.sgpstatp.com \'nonce-qXECi094IEOt4cDuQAWt1\';style-src \'unsafe-inline\' *.tiktokcdn.com *.tiktokcdn-in.com *.akamaized.net *.ibytedtos.com *.tiktok.com *.ipstatp.com *.ibyteimg.com *.googleapis.com;img-src data: *.akamaized.net *.tiktokcdn.com *.tiktokcdn-in.com *.ibytedtos.com *.ibyteimg.com *.tiktok.com *.hypstarcdn.com *.facebook.com *.google-analytics.com *.googletagmanager.com;frame-src *.tiktok.com;media-src blob: *.tiktok.com *.tiktokv.com *.tiktokcdn.com *.tiktokcdn-in.com *.akamaized.net *.ibyteimg.com *.ibytedtos.com;report-uri https://mon-va.byteoversea.com/log/sentry/v2/api/slardar/main/?ev_type=csp&bid=tiktok_web'
        ],
        'x-tt-logid' => [
            '202009232147230101901861425207B0B0'
        ],
        'x-ua-compatible' => [
            'IE=Edge,chrome=1'
        ],
        'x-csp-nonce' => [
            'VBnf0xRY9VjAA7eMNy2F1'
        ],
        'x-tt-trace-host' => [
            '017fd74c19e6f43210238530d0ca5e92e826eb71a2182716aa00418db269c5d4e6309750d61cc8b03fe747704d02fad77b06516301ea06f3c23d325719718597efb6baf1c926b619d7230584bbccc8af20d938b787bd3f549922207be27d72c497'
        ],
        'access-control-allow-origin' => [
            '*'
        ],
        'content-encoding' => [
            'br'
        ],
        'content-length' => [
            '601'
        ],
        'x-origin-response-time' => [
            '28,23.45.180.206'
        ],
        'date' => [
            'Wed, 23 Sep 2020 21:47:24 GMT'
        ],
        'x-tt-trace-tag' => [
            'id=16;cdn-cache=miss;type=dyn'
        ],
        'server-timing' => [
            'cdn-cache; desc=MISS, edge; dur=368, origin; dur=28',
            'inner; dur=24'
        ],
        'x-parent-response-time' => [
            '396,212.145.41.212'
        ],
        'Content-Location' => [
            'https://www.tiktok.com/oembed?url=https%3A%2F%2Fwww.tiktok.com%2F%40a3noticias%2Fvideo%2F6806030056956251397&format=json'
        ],
        'X-Request-Time' => [
            '0.522 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":"1.0","type":"video","title":"Nuestro #AplausoSanitario más sincero. Para todos. Y recuerda, #QuédateEnCasa","author_url":"https://www.tiktok.com/@a3noticias","author_name":"Antena 3 Noticias","width":"100%","height":"100%","html":"<blockquote class=\\"tiktok-embed\\" cite=\\"https://www.tiktok.com/@a3noticias/video/6806030056956251397\\" data-video-id=\\"6806030056956251397\\" style=\\"max-width: 605px;min-width: 325px;\\" > <section> <a target=\\"_blank\\" title=\\"@a3noticias\\" href=\\"https://www.tiktok.com/@a3noticias\\">@a3noticias</a> <p>Nuestro <a title=\\"aplausosanitario\\" target=\\"_blank\\" href=\\"https://www.tiktok.com/tag/aplausosanitario\\">#AplausoSanitario</a> más sincero. Para todos. Y recuerda, <a title=\\"quédateencasa\\" target=\\"_blank\\" href=\\"https://www.tiktok.com/tag/quédateencasa\\">#QuédateEnCasa</a></p> <a target=\\"_blank\\" title=\\"♬ Resistiré - Duo Dinamico\\" href=\\"https://www.tiktok.com/music/Resistiré-250824169968246784\\">♬ Resistiré - Duo Dinamico</a> </section> </blockquote> <script async src=\\"https://www.tiktok.com/embed.js\\"></script>","thumbnail_width":480,"thumbnail_height":848,"thumbnail_url":"https://p77-sign-sg.tiktokcdn.com/obj/tos-maliva-p-0068/26093075d77684fa3d60fd42bf50d48a?x-expires=1600916400&x-signature=fFLrAEYicZu3LYhdoE1UnYyU%2FUE%3D","provider_url":"https://www.tiktok.com","provider_name":"TikTok"}'
];
