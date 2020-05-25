<?php
declare(strict_types = 1);

return [
    'authorName' => '@graffica_info',
    'authorUrl' => 'https://twitter.com/graffica_info',
    'cms' => null,
    'code' => null,
    'description' => 'El lenguaje, sea cual sea el idioma, siempre esconde entre los orígenes de sus palabras muchas curiosidades. Este es el caso del origen del ampersand.',
    'favicon' => 'https://graffica.info/favicon.ico',
    'feeds' => [
        'https://graffica.info/feed/'
    ],
    'icon' => null,
    'image' => 'https://graffica.info/wp-content/uploads/2020/02/el-origen-de-la-Ampersand-destacado.jpg',
    'keywords' => [],
    'language' => 'es',
    'languages' => [],
    'license' => null,
    'providerName' => 'Gràffica',
    'providerUrl' => 'https://graffica.info',
    'publishedTime' => '2020-02-20 09:30:00',
    'redirect' => null,
    'title' => 'El origen del ampersand que desconocen muchos diseñadores',
    'url' => 'https://graffica.info/sabes-cual-es-el-origen-del-ampersand/',
    'linkedData' => [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'WebSite',
                '@id' => 'https://graffica.info/#website',
                'url' => 'https://graffica.info/',
                'name' => 'Gràffica',
                'description' => 'Revista de noticias del mundo del diseño, en especial del diseño gráfico, la creatividad y la cultura visual. Tipografía, ilustración, branding y mucho más.',
                'potentialAction' => [
                    [
                        '@type' => 'SearchAction',
                        'target' => 'https://graffica.info/?s={search_term_string}',
                        'query-input' => 'required name=search_term_string'
                    ]
                ],
                'inLanguage' => 'es'
            ],
            [
                '@type' => 'ImageObject',
                '@id' => 'https://graffica.info/sabes-cual-es-el-origen-del-ampersand/#primaryimage',
                'inLanguage' => 'es',
                'url' => 'https://graffica.info/wp-content/uploads/2020/02/el-origen-de-la-Ampersand-destacado.jpg',
                'width' => 1000,
                'height' => 659
            ],
            [
                '@type' => 'WebPage',
                '@id' => 'https://graffica.info/sabes-cual-es-el-origen-del-ampersand/#webpage',
                'url' => 'https://graffica.info/sabes-cual-es-el-origen-del-ampersand/',
                'name' => 'El origen del ampersand que desconocen muchos diseñadores',
                'isPartOf' => [
                    '@id' => 'https://graffica.info/#website'
                ],
                'primaryImageOfPage' => [
                    '@id' => 'https://graffica.info/sabes-cual-es-el-origen-del-ampersand/#primaryimage'
                ],
                'datePublished' => '2020-02-20T09:30:00+00:00',
                'dateModified' => '2020-02-20T09:17:48+00:00',
                'author' => [
                    '@id' => 'https://graffica.info/#/schema/person/e061170e01040cb6444c3edea24a464b'
                ],
                'description' => 'El lenguaje, sea cual sea el idioma, siempre esconde entre los orígenes de sus palabras muchas curiosidades. Este es el caso del origen del ampersand.',
                'inLanguage' => 'es',
                'potentialAction' => [
                    [
                        '@type' => 'ReadAction',
                        'target' => [
                            'https://graffica.info/sabes-cual-es-el-origen-del-ampersand/'
                        ]
                    ]
                ]
            ],
            [
                '@type' => [
                    'Person'
                ],
                '@id' => 'https://graffica.info/#/schema/person/e061170e01040cb6444c3edea24a464b',
                'name' => 'Gràffica',
                'image' => [
                    '@type' => 'ImageObject',
                    '@id' => 'https://graffica.info/#personlogo',
                    'inLanguage' => 'es',
                    'url' => 'https://secure.gravatar.com/avatar/3149311a3c04959ac810d7ff614188f1?s=96&d=mm&r=g',
                    'caption' => 'Gràffica'
                ]
            ]
        ]
    ],
    'oEmbed' => []
];
