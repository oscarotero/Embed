<?php
declare(strict_types = 1);

return [
    'headers' => [
        'Content-Location' => [
            'https://codepen.io/api/oembed?url=http%3A%2F%2Fcodepen.io%2FZhouzi%2Fpen%2FJoRazP&format=json',
        ],
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{'."\n"
        .'  "success": true,'."\n"
        .'  "type": "rich",'."\n"
        .'  "version": "1.0",'."\n"
        .'  "provider_name": "CodePen",'."\n"
        .'  "provider_url": "https://codepen.io",'."\n"
        .'  "title": "TheaterJS",'."\n"
        .'  "author_name": "Gabin Aureche",'."\n"
        .'  "author_url": "https://codepen.io/Zhouzi/",'."\n"
        .'  "height": "300",'."\n"
        .'  "width": "800",'."\n"
        .'  "thumbnail_width": "384",'."\n"
        .'  "thumbnail_height": "225",'."\n"
        .'  "thumbnail_url": "https://screenshot.codepen.io/99102.JoRazP.small.46e47801-c06f-4125-afb0-5d84242a3baa.png",'."\n"
        .'  "html": "<iframe id=\\"cp_embed_JoRazP\\" src=\\"https://codepen.io/Zhouzi/embed/preview/JoRazP?height=300&amp;slug-hash=JoRazP&amp;default-tabs=js,result&amp;host=https://codepen.io\\" title=\\"TheaterJS\\" scrolling=\\"no\\" frameborder=\\"0\\" height=\\"300\\" allowtransparency=\\"true\\" class=\\"cp_embed_iframe\\" style=\\"width: 100%; overflow: hidden;\\"></iframe>"'."\n"
        .'}'."\n",
];
