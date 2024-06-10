<?php
declare(strict_types = 1);

return [
    'headers' => [
        'via' => [
            'HTTP/1.1 fringe, HTTP/2 edgeproxy, 1.1 google, 1.1 varnish, 1.1 varnish'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'access-control-allow-origin' => [
            '*'
        ],
        'strict-transport-security' => [
            'max-age=31536000'
        ],
        'x-envoy-upstream-service-time' => [
            '29'
        ],
        'content-type' => [
            'application/json'
        ],
        'accept-ranges' => [
            'bytes'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'origin-trial' => [
            'AjTBCzHiqtNU3PxD6GL8VpVl68/SfxkZJuLQbbyvSNj6/o9VuhZ5EPb/2dTYqi+Mot0AD6XOHBeIatAwEt4lAQcAAABOeyJvcmlnaW4iOiJodHRwczovL29wZW4uc3BvdGlmeS5jb206NDQzIiwiZmVhdHVyZSI6IlRwY2QiLCJleHBpcnkiOjE3MzUzNDM5OTl9'
        ],
        'server' => [
            'envoy'
        ],
        'critical-origin-trial' => [
            'Tpcd'
        ],
        'set-cookie' => [
            'sp_t=8968befb66b4b45b6109ee6af3cfd569; Path=/; Expires=Tue, 10 Jun 2025 15:59:27 GMT; Max-Age=31536000; Domain=.spotify.com; Secure; SameSite=none'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:59:27 GMT'
        ],
        'x-served-by' => [
            'cache-mad22045-MAD, cache-mad22045-MAD'
        ],
        'x-cache' => [
            'MISS, MISS'
        ],
        'x-cache-hits' => [
            '0, 0'
        ],
        'x-timer' => [
            'S1718035168.620601,VS0,VE73'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'Content-Location' => [
            'https://open.spotify.com/oembed?url=https%3A%2F%2Fopen.spotify.com%2Falbum%2F7s66wU1XJ2NsUuWM2NKiUV'
        ],
        'X-Request-Time' => [
            '0.131 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"html":"<iframe style=\\"border-radius: 12px\\" width=\\"100%\\" height=\\"352\\" title=\\"Spotify Embed: A Cantar con Xabarin (Vol. I e II)\\" frameborder=\\"0\\" allowfullscreen allow=\\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\\" loading=\\"lazy\\" src=\\"https://open.spotify.com/embed/album/7s66wU1XJ2NsUuWM2NKiUV?utm_source=oembed\\"></iframe>","iframe_url":"https://open.spotify.com/embed/album/7s66wU1XJ2NsUuWM2NKiUV?utm_source=oembed","width":456,"height":352,"version":"1.0","provider_name":"Spotify","provider_url":"https://spotify.com","type":"rich","title":"A Cantar con Xabarin (Vol. I e II)","thumbnail_url":"https://i.scdn.co/image/ab67616d00001e022dd9ff41aad54c1d93d50aa6","thumbnail_width":300,"thumbnail_height":300}'
];
