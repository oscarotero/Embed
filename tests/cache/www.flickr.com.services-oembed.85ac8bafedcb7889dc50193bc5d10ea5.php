<?php
declare(strict_types = 1);

return [
    'headers' => [
        'Content-Location' => [
            'https://www.flickr.com/services/oembed/?url=https%3A%2F%2Fwww.flickr.com%2Fphotos%2Fdesescribir&format=json',
        ],
    ],
    'statusCode' => 404,
    'reasonPhrase' => 'Not Found',
    'body' => '<html><head>'."\n"
        .'<title>404 Not Found</title>'."\n"
        .'</head><body>'."\n"
        .'<h1>404 Not Found</h1>'."\n"
        .'<p>That URL doesn\'t have an oembed representation.</p>'."\n"
        .'</body></html>'."\n",
];
