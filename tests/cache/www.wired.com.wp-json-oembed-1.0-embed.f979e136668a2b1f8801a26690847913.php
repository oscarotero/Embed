<?php
declare(strict_types = 1);

return [
    'headers' => [
        'access-control-allow-headers' => [
            'Authorization'
        ],
        'access-control-allow-origin' => [
            '*'
        ],
        'access-control-expose-headers' => [
            'X-WP-Total, X-WP-TotalPages'
        ],
        'allow' => [
            'GET'
        ],
        'content-type' => [
            'application/json; charset=UTF-8'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-robots-tag' => [
            'noindex'
        ],
        'verso' => [
            'false'
        ],
        'accept-ranges' => [
            'none'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:20:01 GMT'
        ],
        'via' => [
            '1.1 varnish'
        ],
        'age' => [
            '465'
        ],
        'cache-control' => [
            'no-cache'
        ],
        'set-cookie' => [
            'pay_ent_smp=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsInZlciI6MX0.eyJ1cmxzIjpbXSwiY250IjowLCJtYXgiOjQsImV4cCI6MjAyMTA0fQ.Zb-TlJeIXb3ZmGBKgqLyxTrlPPfw4rtxVUdU0T39e4M; Path=/; Expires=Mon, 04 Apr 2022 21:20:01 GMT; Domain=wired.com; Secure;',
            'pay_events=grant-new-smp; Max-Age=20; SameSite=Strict; Secure;',
            'CN_xid=a0325b0a-e616-4f0f-8672-0f400bbf8e4b; Expires=Fri, 01 Oct 2021 15:20:01 GMT; Domain=.wired.com; path=/; Secure; SameSite=None;',
            'CN_xid_refresh=a0325b0a-e616-4f0f-8672-0f400bbf8e4b; Expires=Wed, 02 Apr 2031 15:20:01 GMT; Domain=.wired.com; path=/; Secure; httponly; SameSite=None;',
            'xid1=1; Expires=Sun, 04 Apr 2021 15:20:16 GMT; path=/;',
            'CN_segments=co.w2113; Expires=Fri, 01 Oct 2021 15:20:01 GMT; path=/;',
            'verso_bucket=696; Expires=Mon, 04 Apr 2022 15:20:01 GMT; path=/;',
            'CN_geo_country_code=ES; Expires=Fri, 01 Oct 2021 15:20:01 GMT; Path=/; Domain=wired.com; Samesite=None; Secure'
        ],
        'apple-news-services-host' => [
            'www.wired.com'
        ],
        'apple-news-services-request-url' => [
            '/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.wired.com%2F2016%2F07%2Freview-yi-4k-action-camera%2F'
        ],
        'apple-news-services-parsed-url' => [
            '/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.wired.com%2F2016%2F07%2Freview-yi-4k-action-camera%2F'
        ],
        'apple-news-services-handled' => [
            'false'
        ],
        'content-security-policy' => [
            'default-src https: data: \'unsafe-inline\' \'unsafe-eval\'; child-src https: data: blob:; connect-src https: data: blob: wss://*.hotjar.com; font-src https: data:; img-src https: blob: data: android-webview-video-poster:; media-src blob: data: https:; object-src https:; script-src https: data: blob: \'unsafe-inline\' \'unsafe-eval\'; style-src https: \'unsafe-inline\'; block-all-mixed-content; upgrade-insecure-requests;'
        ],
        'strict-transport-security' => [
            'max-age=31536000; preload'
        ],
        'x-served-by' => [
            'cache-mad22063-MAD'
        ],
        'x-cache' => [
            'HIT'
        ],
        'x-cache-hits' => [
            '1'
        ],
        'x-timer' => [
            'S1617549602.700250,VS0,VE1'
        ],
        'x-ua-device' => [
            'desktop'
        ],
        'vary' => [
            'accept-payment, Verso, accept-encoding'
        ],
        'content-encoding' => [
            'br'
        ],
        'Content-Location' => [
            'https://www.wired.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.wired.com%2F2016%2F07%2Freview-yi-4k-action-camera%2F'
        ],
        'X-Request-Time' => [
            '0.112 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":"1.0","provider_name":"WIRED","provider_url":"https:\\/\\/www.wired.com","author_name":"Wired Staff","author_url":"https:\\/\\/www.wired.com\\/author\\/wired-staff\\/","title":"Review: Yi 4K Action Camera","type":"rich","width":600,"height":338,"html":"<blockquote class=\\"wp-embedded-content\\"><a href=\\"https:\\/\\/www.wired.com\\/2016\\/07\\/review-yi-4k-action-camera\\/\\">Review: Yi 4K Action Camera<\\/a><\\/blockquote>\\n<script type=\'text\\/javascript\'>\\n<!--\\/\\/--><![CDATA[\\/\\/><!--\\n        !function(a,b){\\"use strict\\";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf(\\"MSIE 10\\"),h=!!navigator.userAgent.match(\\/Trident.*rv:11\\\\.\\/),i=b.querySelectorAll(\\"iframe.wp-embedded-content\\");for(c=0;c<i.length;c++)if(d=i[c],!d.getAttribute(\\"data-secret\\")){if(f=Math.random().toString(36).substr(2,10),d.src+=\\"#?secret=\\"+f,d.setAttribute(\\"data-secret\\",f),g||h)a=d.cloneNode(!0),a.removeAttribute(\\"security\\"),d.parentNode.replaceChild(a,d)}else;}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d.secret||d.message||d.value)if(!\\/[^a-zA-Z0-9]\\/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll(\'iframe[data-secret=\\"\'+d.secret+\'\\"]\'),k=b.querySelectorAll(\'blockquote[data-secret=\\"\'+d.secret+\'\\"]\');for(e=0;e<k.length;e++)k[e].style.display=\\"none\\";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute(\\"style\\"),\\"height\\"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if (~~g<200)g=200;f.height=g}if(\\"link\\"===d.message)if(h=b.createElement(\\"a\\"),i=b.createElement(\\"a\\"),h.href=f.getAttribute(\\"src\\"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener(\\"message\\",a.wp.receiveEmbedMessage,!1),b.addEventListener(\\"DOMContentLoaded\\",c,!1),a.addEventListener(\\"load\\",c,!1)}(window,document);\\n\\/\\/--><!]]>\\n<\\/script><iframe sandbox=\\"allow-scripts\\" security=\\"restricted\\" src=\\"https:\\/\\/www.wired.com\\/2016\\/07\\/review-yi-4k-action-camera\\/embed\\/\\" width=\\"600\\" height=\\"338\\" title=\\"&#8220;Review: Yi 4K Action Camera&#8221; &#8212; WIRED\\" frameborder=\\"0\\" marginwidth=\\"0\\" marginheight=\\"0\\" scrolling=\\"no\\" class=\\"wp-embedded-content\\"><\\/iframe>","thumbnail_url":"https:\\/\\/www.wired.com\\/wp-content\\/uploads\\/2016\\/07\\/Yi-4KHP.jpg","thumbnail_width":600,"thumbnail_height":337}'
];
