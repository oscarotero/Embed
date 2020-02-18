<?php
declare(strict_types = 1);

return [
    'headers' => [
        'Content-Location' => [
            'https://soundcloud.com/oembed?url=https%3A%2F%2Fsoundcloud.com%2Fbruceneilmusic&format=json',
        ],
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":1.0,"type":"rich","provider_name":"SoundCloud","provider_url":"https://soundcloud.com","height":450,"width":"100%","title":"Bruce Neil","description":"Bruce Neil from Wokingham is a singer/songwriter with a folk inspired sound, producing songs with heartfelt depth and lyrics that captivate the listener, taking them on an insightful and thought-provoking journey. As a winner of BBC Introducing, resulting in air play nationally, he has recently achieved widespread public attention following the video release of his percussive folk rendition of Guns N’ Roses track Paradise City. Not only did this go viral on social media, it was endorsed by the band themselves and has achieved recognition and air play from several US radio stations. He takes his musical inspiration and guitar-playing style from the likes of Passenger and Mick Flannery.","thumbnail_url":"https://i1.sndcdn.com/avatars-000137863509-h9h7dr-t500x500.jpg","html":"\\u003Ciframe width=\\"100%\\" height=\\"450\\" scrolling=\\"no\\" frameborder=\\"no\\" src=\\"https://w.soundcloud.com/player/?visual=true\\u0026url=https%3A%2F%2Fapi.soundcloud.com%2Fusers%2F6538603\\u0026show_artwork=true\\"\\u003E\\u003C/iframe\\u003E","author_name":"Bruce Neil","author_url":"https://soundcloud.com/bruceneilmusic"}',
];
