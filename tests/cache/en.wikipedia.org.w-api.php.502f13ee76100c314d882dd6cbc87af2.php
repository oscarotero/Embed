<?php
declare(strict_types = 1);

return [
    'headers' => [
        'date' => [
            'Mon, 10 Jun 2024 15:59:20 GMT'
        ],
        'server' => [
            'mw-api-ext.eqiad.main-58fb894d6b-9gjtq'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-frame-options' => [
            'DENY'
        ],
        'content-disposition' => [
            'inline; filename=api-result.json'
        ],
        'vary' => [
            'Accept-Encoding,Treat-as-Untrusted,X-Forwarded-Proto,Cookie,Authorization'
        ],
        'cache-control' => [
            'private, must-revalidate, max-age=0'
        ],
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'age' => [
            '0'
        ],
        'x-cache' => [
            'cp6012 miss, cp6016 pass'
        ],
        'x-cache-status' => [
            'pass'
        ],
        'server-timing' => [
            'cache;desc="pass", host;desc="cp6016"'
        ],
        'strict-transport-security' => [
            'max-age=106384710; includeSubDomains; preload'
        ],
        'report-to' => [
            '{ "group": "wm_nel", "max_age": 604800, "endpoints": [{ "url": "https://intake-logging.wikimedia.org/v1/events?stream=w3c.reportingapi.network_error&schema_uri=/w3c/reportingapi/network_error/1.0.0" }] }'
        ],
        'nel' => [
            '{ "report_to": "wm_nel", "max_age": 604800, "failure_fraction": 0.05, "success_fraction": 0.0}'
        ],
        'x-client-ip' => [
            '89.141.175.178'
        ],
        'set-cookie' => [
            'NetworkProbeLimit=0.001;Path=/;Secure;SameSite=Lax;Max-Age=3600'
        ],
        'accept-ranges' => [
            'bytes'
        ],
        'Content-Location' => [
            'https://en.wikipedia.org/w/api.php?action=query&format=json&continue=&titles=Albert_Einstein&prop=extracts&exchars=1000'
        ],
        'X-Request-Time' => [
            '0.282 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"batchcomplete":"","warnings":{"extracts":{"*":"HTML may be malformed and/or unbalanced and may omit inline images. Use at your own risk. Known problems are listed at https://www.mediawiki.org/wiki/Special:MyLanguage/Extension:TextExtracts#Caveats."}},"query":{"normalized":[{"from":"Albert_Einstein","to":"Albert Einstein"}],"pages":{"736":{"pageid":736,"ns":0,"title":"Albert Einstein","extract":"<p class=\\"mw-empty-elt\\">\\n\\n\\n\\n</p>\\n\\n<p><b>Albert Einstein</b> (<span></span> <i title=\\"English pronunciation respelling\\"><span>EYEN</span>-styne</i>; <span>German:</span> <span lang=\\"de-Latn-fonipa\\">[\\u02c8alb\\u025b\\u0250t<span> </span>\\u02c8\\u0294a\\u026an\\u0283ta\\u026an]</span> ; 14 March 1879 \\u2013 18 April 1955) was a German-born theoretical physicist who is widely held to be one of the greatest and most influential scientists of all time. Best known for developing the theory of relativity, Einstein also made important contributions to quantum mechanics, and was thus a central figure in the revolutionary reshaping of the scientific understanding of nature that modern physics accomplished in the first decades of the twentieth century. His mass\\u2013energy equivalence formula <span><i>E</i> = <i>mc</i><sup>2</sup></span>, which arises from relativity theory, has been called \\"the world\'s most famous equation\\". He received the 1921 Nobel Prize in Physics \\"for his services to theoretical physics, and especially for his discovery of the law</p>..."}}}}'
];
