<?php
declare(strict_types = 1);

return [
    'authorName' => '/photos/desescribir/',
    'authorUrl' => null,
    'cms' => null,
    'code' => [
        'html' => '<iframe src="https://embedr.flickr.com/photostreams/34912442@N03" frameborder="0" width="640" height="480" allowTransparency="true"></iframe>',
        'width' => 640,
        'height' => 480,
        'ratio' => 75.0
    ],
    'description' => '¡Explora las 618 fotos de Flickr de desescribir!',
    'favicon' => 'https://combo.staticflickr.com/pw/favicon.ico',
    'feeds' => [
        'https://www.flickr.com/services/feeds/photos_public.gne?id=34912442@N03&lang=es-us&format=atom'
    ],
    'icon' => 'https://combo.staticflickr.com/pw/images/favicons/favicon-120.png',
    'image' => 'https://live.staticflickr.com/8765/17244790083_d2f40f713f_z.jpg',
    'keywords' => [],
    'language' => 'es-us',
    'languages' => [],
    'license' => null,
    'providerName' => 'Flickr',
    'providerUrl' => 'https://www.flickr.com',
    'publishedTime' => null,
    'redirect' => null,
    'title' => 'desescribir',
    'url' => 'https://www.flickr.com/photos/desescribir',
    'linkedData' => [
        [
            '@context' => 'http://schema.org',
            '@type' => 'WebSite',
            'name' => 'Flickr',
            'url' => 'https://www.flickr.com',
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => 'https://www.flickr.com/search?text={search_term_string}&structured=yes',
                'query-input' => 'required name=search_term_string'
            ]
        ],
        [
            '@context' => 'http://schema.org',
            '@type' => 'Organization',
            'url' => 'http://www.flickr.com',
            'logo' => 'https://www.flickr.com/images/opensearch-flickr-logo.png'
        ],
        [
            '@context' => 'http://schema.org',
            '@type' => 'Person',
            'name' => 'Flickr',
            'url' => 'https://www.flickr.com',
            'sameAs' => [
                'https://www.facebook.com/flickr',
                'https://instagram.com/flickr',
                'https://flickr.tumblr.com',
                'https://twitter.com/flickr',
                'https://plus.google.com/+flickr',
                'https://www.pinterest.com/flickr'
            ]
        ]
    ],
    'oEmbed' => []
];
