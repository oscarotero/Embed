<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx',
            'nginx'
        ],
        'date' => [
            'Sun, 23 Feb 2020 00:01:12 GMT',
            'Sun, 23 Feb 2020 00:01:12 GMT'
        ],
        'content-type' => [
            'text/html',
            'text/html'
        ],
        'content-length' => [
            '162',
            '1175'
        ],
        'connection' => [
            'keep-alive'
        ],
        'keep-alive' => [
            'timeout=20'
        ],
        'location' => [
            'https://www.hookem.com/story/texas-shortstop-joe-baker-arrested-public-intoxication/  HTTP/2 502'
        ],
        'etag' => [
            '"5ddefe83-497"'
        ],
        'x-cacheable' => [
            'YES:briefly:502'
        ],
        'cache-control' => [
            'max-age=10, must-revalidate'
        ],
        'x-cache' => [
            'MISS'
        ],
        'x-pass-why' => [
            ''
        ],
        'x-cache-group' => [
            'normal'
        ],
        'Content-Location' => [
            'https://www.hookem.com/story/texas-shortstop-joe-baker-arrested-public-intoxication/'
        ]
    ],
    'statusCode' => 502,
    'reasonPhrase' => 'Bad Gateway',
    'body' => '<!DOCTYPE html>
<html>
<head>
    <title>Error Loading Site | 502 Bad Gateway</title>
</head>

<body>
    <style>
@import url(//fonts.googleapis.com/css?family=Open+Sans:300);

    body {
    color: #343434;
    font-family: \'Open Sans Regular\', Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.2;
    margin: 50px 25px;
    }

    h1,h2,h3,h4,h5,h6 {
    font-weight:300;
    margin:5px 0 25px;
    padding:0;
    }

    h1 {
    font-size: 100px;
    margin:5px -5px 10px 0;
    }

    hr {
    background:#DFDFDF;
    height: 1px;
    border:0;
    margin: 40px 0 30px;
    }

    </style>

    <h1>502</h1>

    <h2>The page request was canceled because it took too long to complete</h2>
    <hr>

    <p><strong>What can I do?</strong></p>

    <p></p>

    <p><strong>Site visitors:</strong> There was an issue serving your request,
    please try again in a few minutes.</p>

    <p><strong>Site Owners:</strong> A request for either a page, script,
    process, or query has taken too long to complete and has been cancelled due
    to a bad gateway. You should visit your error log for more information.</p>
</body>
</html>'
];
