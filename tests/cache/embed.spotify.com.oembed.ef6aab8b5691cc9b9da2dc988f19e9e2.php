<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'envoy',
            'envoy',
            'envoy'
        ],
        'date' => [
            'Sat, 22 Feb 2020 23:47:18 GMT',
            'Sat, 22 Feb 2020 23:47:18 GMT',
            'Sat, 22 Feb 2020 23:47:18 GMT'
        ],
        'content-type' => [
            'text/html',
            'text/html',
            'application/json; charset=utf-8'
        ],
        'location' => [
            'https://open.spotify.com/oembed/?url=https%3A%2F%2Fopen.spotify.com%2Falbum%2F7s66wU1XJ2NsUuWM2NKiUV&format=json',
            'https://open.spotify.com/oembed?url=https%3A%2F%2Fopen.spotify.com%2Falbum%2F7s66wU1XJ2NsUuWM2NKiUV&format=json'
        ],
        'x-envoy-upstream-service-time' => [
            '0',
            '0',
            '8'
        ],
        'strict-transport-security' => [
            'max-age=31536000',
            'max-age=31536000',
            'max-age=31536000'
        ],
        'x-content-type-options' => [
            'nosniff',
            'nosniff',
            'nosniff'
        ],
        'vary' => [
            'Accept-Encoding',
            'Accept-Encoding',
            'Accept-Encoding,Accept-Encoding'
        ],
        'content-encoding' => [
            'gzip',
            'gzip',
            'gzip'
        ],
        'via' => [
            'HTTP/2 edgeproxy, 1.1 google',
            'HTTP/2 edgeproxy, 1.1 google',
            'HTTP/2 edgeproxy, 1.1 google'
        ],
        'alt-svc' => [
            'clear  HTTP/2 301',
            'clear  HTTP/2 200',
            'clear'
        ],
        'set-cookie' => [
            'sp_t=bf75e550f35390073b66633e04cd1814; path=/; expires=Wed, 22 Apr 2020 23:47:18 GMT; domain=.spotify.com; secure'
        ],
        'Content-Location' => [
            'https://open.spotify.com/oembed?url=https%3A%2F%2Fopen.spotify.com%2Falbum%2F7s66wU1XJ2NsUuWM2NKiUV&format=json'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"html":"<iframe width=\\"300\\" height=\\"380\\" allowtransparency=\\"true\\" frameborder=\\"0\\" allow=\\"encrypted-media\\" title=\\"Spotify Embed: A Cantar con Xabarin (Vol. I &amp; II)\\" src=\\"https://open.spotify.com/embed/album/7s66wU1XJ2NsUuWM2NKiUV\\"></iframe>","width":300,"height":380,"version":"1.0","provider_name":"Spotify","provider_url":"https://www.spotify.com","type":"rich","title":"A Cantar con Xabarin (Vol. I & II)","thumbnail_url":"https://i.scdn.co/image/ab67616d00001e02022aca057f08a1d40c1f0733","thumbnail_width":300,"thumbnail_height":300}'
];
