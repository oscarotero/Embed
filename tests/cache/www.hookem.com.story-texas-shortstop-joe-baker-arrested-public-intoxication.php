<?php
declare(strict_types = 1);

return [
    'headers' => [
        'connection' => [
            'close'
        ],
        'content-length' => [
            '0',
            '0  HTTP/2 302',
            '0  HTTP/2 404',
            '548'
        ],
        'retry-after' => [
            '0',
            '0',
            '0'
        ],
        'location' => [
            'https://www.hookem.com/story/texas-shortstop-joe-baker-arrested-public-intoxication/',
            'https://eu.hookem.com/story/texas-shortstop-joe-baker-arrested-public-intoxication/',
            'https://eu.hookem.com/'
        ],
        'accept-ranges' => [
            'bytes',
            'bytes',
            'bytes',
            'bytes'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:58:47 GMT',
            'Mon, 10 Jun 2024 15:58:47 GMT',
            'Mon, 10 Jun 2024 15:58:47 GMT',
            'Mon, 10 Jun 2024 15:58:47 GMT'
        ],
        'nel' => [
            '{"report_to":"default","max_age":31557600,"include_subdomains":true,"success_fraction":0.005}',
            '{"report_to":"default","max_age":31557600,"include_subdomains":true,"success_fraction":0.005}'
        ],
        'report-to' => [
            '{"max_age":31557600,"include_subdomains":true,"endpoints":[{"url":"https://reporting-api.gannettinnovation.com"}]}',
            '{"max_age":31557600,"include_subdomains":true,"endpoints":[{"url":"https://reporting-api.gannettinnovation.com"}]}'
        ],
        'x-cache' => [
            'HIT',
            'HIT',
            'HIT, HIT',
            'HIT, HIT'
        ],
        'vary' => [
            'User-Agent',
            'User-Agent',
            'Accept-Encoding'
        ],
        'cache-control' => [
            'max-age=300,private  HTTP/2 302',
            'max-age=300,private',
            'max-age=10',
            'max-age=10'
        ],
        'set-cookie' => [
            'gnt_eid=(null);domain=.hookem.com;path=/;secure;samesite=lax;max-age=5184000;priority=high;',
            'gnt_i=69894212976833900198*12430*ES~C;domain=.hookem.com;path=/;samesite=lax;secure;priority=high;',
            'gup_clientid=0; domain=eu.hookem.com; max-age=-1; path=/; secure',
            'gup_clientid=0; domain=hookem.com; max-age=-1; path=/; secure',
            'gup_anonid=0; domain=hookem.com; max-age=-1; path=/; secure',
            'gup_lng=0; domain=hookem.com; max-age=-1; path=/; secure'
        ],
        'content-security-policy' => [
            'upgrade-insecure-requests',
            'upgrade-insecure-requests',
            'upgrade-insecure-requests'
        ],
        'strict-transport-security' => [
            'max-age=63072000;includeSubDomains;preload',
            'max-age=600',
            'max-age=600'
        ],
        'server' => [
            'Varnish'
        ],
        'via' => [
            '1.1 varnish, 1.1 varnish',
            '1.1 varnish, 1.1 varnish'
        ],
        'x-robots-tag' => [
            'noindex, nofollow',
            'noindex, nofollow'
        ],
        'gannett-debug-path' => [
            'region: east',
            'region: west ---> region: east'
        ],
        'gannett-debug-path-full' => [
            'restarts: 0 ttl: 1200.000 shield: false server: cache-mad2200136-MAD path: region: east',
            'restarts: 0 ttl: 1200.000 shield: false server: cache-mad22073-MAD path: region: east >>>> restarts: 0 ttl: 1200.000 shield: true server: cache-fra-eddf8230088-FRA path: region: west ---> region: east'
        ],
        'age' => [
            '90',
            '15356'
        ],
        'x-served-by' => [
            'cache-fra-etou8220056-FRA, cache-mad2200133-MAD',
            'cache-fra-eddf8230105-FRA, cache-mad2200133-MAD'
        ],
        'x-cache-hits' => [
            '0, 0',
            '1, 0'
        ],
        'x-timer' => [
            'S1718035128.698632,VS0,VE2',
            'S1718035128.716499,VS0,VE1'
        ],
        'content-type' => [
            'text/html'
        ],
        'Content-Location' => [
            'https://eu.hookem.com/'
        ],
        'X-Request-Time' => [
            '0.195 ms'
        ]
    ],
    'statusCode' => 404,
    'reasonPhrase' => 'Not Found',
    'body' => '<html>
<head><title>404 Not Found</title></head>
<body>
<center><h1>404 Not Found</h1></center>
<hr><center>nginx</center>
</body>
</html>
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
'
];
