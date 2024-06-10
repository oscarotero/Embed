<?php
declare(strict_types = 1);

return [
    'headers' => [
        'date' => [
            'Mon, 10 Jun 2024 15:59:05 GMT',
            'Mon, 10 Jun 2024 15:59:06 GMT',
            'Mon, 10 Jun 2024 15:59:06 GMT'
        ],
        'content-type' => [
            'text/html',
            'text/html; charset=UTF-8',
            'text/html; charset=UTF-8'
        ],
        'transfer-encoding' => [
            'chunked'
        ],
        'connection' => [
            'keep-alive'
        ],
        'location' => [
            'https://snipplr.com/view/72914/better-html-5-basic-starter-template',
            '/login/'
        ],
        'cf-cache-status' => [
            'DYNAMIC',
            'DYNAMIC',
            'DYNAMIC'
        ],
        'report-to' => [
            '{"endpoints":[{"url":"https:\\/\\/a.nel.cloudflare.com\\/report\\/v4?s=pjUZbEDf5vtXXjXlg3s0fLRsldl8g11G%2FIPn7zlyBdP72R%2B%2FdsfsHmbuaJ%2FwLlo9iuJ6iPqWsyBrxYd9kJKXObgRyBoY4NtH3YT9cDIiAs97MAHTWj5i1sRcO%2FwG"}],"group":"cf-nel","max_age":604800}',
            '{"endpoints":[{"url":"https:\\/\\/a.nel.cloudflare.com\\/report\\/v4?s=gLEQgfs7qbqLNO9hz2%2FNv085Z78p5wuKHOtC06K5gGxIrvhPjtIsoGmm6%2FuCh6feDlq4loCA3saTvTAm%2FigMRjPoGtEvRjtAbbGFBcZpKzYQGo3cjlern1Y3Dbh%2B"}],"group":"cf-nel","max_age":604800}',
            '{"endpoints":[{"url":"https:\\/\\/a.nel.cloudflare.com\\/report\\/v4?s=kvpOpqUBymk0wOsExPH9SnkqpNafr%2B9xqf4c3d8%2FSJ%2Fv3KawMzGsN5lhsg0oLb3KFWLusjRcccTCYffOvZWuMqs047xM4GA3xGAn2TZDTfQCTaowj%2BW8jfjMll13"}],"group":"cf-nel","max_age":604800}'
        ],
        'nel' => [
            '{"success_fraction":0,"report_to":"cf-nel","max_age":604800}',
            '{"success_fraction":0,"report_to":"cf-nel","max_age":604800}',
            '{"success_fraction":0,"report_to":"cf-nel","max_age":604800}'
        ],
        'server' => [
            'cloudflare',
            'cloudflare',
            'cloudflare'
        ],
        'cf-ray' => [
            '891a910a9b093150-MAD',
            '891a910d7daf3c98-CDG  HTTP/2 200',
            '891a9110ba143c98-CDG'
        ],
        'alt-svc' => [
            'h2=":443"; ma=60  HTTP/2 302'
        ],
        'x-powered-by' => [
            'PHP/7.3.12',
            'PHP/7.3.12'
        ],
        'set-cookie' => [
            'PHPSESSID=to7a0126j2ummn48vka0niqg05; path=/; secure; HttpOnly; SameSite=lax'
        ],
        'cache-control' => [
            'max-age=0, must-revalidate, private',
            'max-age=0, must-revalidate, private'
        ],
        'expires' => [
            'Mon, 10 Jun 2024 15:59:06 GMT',
            'Mon, 10 Jun 2024 15:59:06 GMT'
        ],
        'strict-transport-security' => [
            'max-age=63072000; includeSubDomains; preload',
            'max-age=63072000; includeSubDomains; preload'
        ],
        'x-content-type-options' => [
            'nosniff',
            'nosniff'
        ],
        'content-encoding' => [
            'br'
        ],
        'Content-Location' => [
            'https://snipplr.com/login/'
        ],
        'X-Request-Time' => [
            '1.328 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="UTF-8" />
<title>Snipplr - Login</title>
<link rel="stylesheet" type="text/css" href="/css/main.css?v3" />
<link rel="stylesheet" type="text/css" href="/css/snipplr2.css?v3" />
<link rel="stylesheet" type="text/css" href="/css/gigs.css?v3" media="screen" />
<link rel="stylesheet" href="/css/chosen.css?v3" />
<link rel="stylesheet" href="/css/view.css?v3" />
<link rel="shortcut icon" href="/favicon.ico?v3" />
<link rel="stylesheet" href="/fontawesome-free-5.12.1-web/css/all.css?v3">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.min.css?v3" />
</head>
<body id="snippets">
<div id="header">
<div class="container-fluid">
<a id="logo" href="/"></a>
<div id="nav">
<ul>
<li class="snippets">
<a href="/">code snippets</a>
<ul class="secondary">
<li><a href="/all">all code snippets</a>/</li>
<li><a href="/popular">popular code snippets</a>/</li>
<li><a href="/login/">your code snippets</a></li>
</ul>
</li>
<li class="developer">
</li>
<li class="blog"><a href="https://snipplr.com/blog/">blog</a></li>
<li><a href="/privacy.php">privacy</a></li>
<li class="about"><a href="/about/">about snipplr</a></li>
</ul>
</div>
</div>
</div>
<div id="subnav">
<div class="container-fluid">
<ul>
<li><a href="/new/" class="first">New Snippet</a>/</li>
<li><a href="/register/">Register</a>/</li>
<li><a href="/login/">Login</a></li>
</ul>
</div>
</div>
<div id="stripe">
<div class="container-fluid">
<form name="search" action="/all" method="get" accept-charset="utf-8" class="search">
<div class="row">
<div class="col-4">
<label for="search"></label><input type="text" name="search" class="s-input s-search-box" value placeholder="Search by title, description" id="search" />
<a class="advsearch" href="/advanced-search/"><strong>Advanced Search</strong></a>
</div>
</div>
</form>
</div>
</div>

<div id="body">
<div class="container-fluid">
<h1>Login to Your Account</h1>
<div class="row">
<div class="col-2">
<div class="s-div-container">
<form method="post">
<p class="s-widget-box">
<label for="username">Username/Email</label>
<input type="text" name="username" value id="username" class="s-input" />
</p>
<p class="s-widget-box">
<label for="password">Password</label>
<input type="password" name="password" value id="password" class="s-input" />
</p>
<p class="s-widget-box">
<input type="submit" name="btnsubmit" value="LOGIN" id="btnsubmit" class="s-button" />
<input type="hidden" name="_csrf_token" value="jPv6TSvW-tCedI_C8Ri-Gwmv0FnpqOmfXHIkgDs2Ofo">
</p>
<p class="s-widget-box">
<a href="/forgot/">Forgot your password?</a>
</p>
<p class="s-widget-box">Don\'t have an account? <a href="/register/">Register</a> now!</p>
</form>
</div>
</div>
<div class="col-2">
<div class="s-div-container">
<button type="button" class="loginBtn loginBtn--google" onclick="if (!window.__cfRLUnblockHandlers) return false; window.location.href=\'/connect/google\'" data-cf-modified-b4ea21417e73bd38723ffe34->
<svg aria-hidden="true" class="loginBtn--svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4"></path>
<path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17z" fill="#34A853"></path>
<path d="M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07z" fill="#FBBC05"></path>
<path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3z" fill="#EA4335"></path>
</svg>
Login with Google
</button>
<button type="button" class="loginBtn loginBtn--facebook" onclick="if (!window.__cfRLUnblockHandlers) return false; window.location.href=\'/connect/facebook\'" data-cf-modified-b4ea21417e73bd38723ffe34->
<svg aria-hidden="true" class="loginBtn--svg loginBtn--facebook--svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5z" fill="#ffffff"></path>
</svg>
Login with Facebook
</button>
<button type="button" class="loginBtn loginBtn--github" onclick="if (!window.__cfRLUnblockHandlers) return false; window.location.href=\'/connect/github\'" data-cf-modified-b4ea21417e73bd38723ffe34->
<svg aria-hidden="true" class="loginBtn--svg" width="18" height="18" viewBox="0 0 18 18">
<path d="M9 1a8 8 0 0 0-2.53 15.59c.4.07.55-.17.55-.38l-.01-1.49c-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.42 7.42 0 0 1 4 0c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48l-.01 2.2c0 .21.15.46.55.38A8.01 8.01 0 0 0 9 1z" fill="#ffffff"></path>
</svg>
Login with GitHub
</button>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="clear"></div>
</div>
</div>
<div id="footernav">
<div class="container-fluid">
<ul>
<li><a href="/" class="first">Code Snippets</a>/</li>
<li><a href="https://snipplr.com/blog/">Snipplr Blog</a>/</li>
<li><a href="/about/">About Snipplr</a></li>
</ul>
</div>
</div>
<div class="container-fluid" id="footer">
<h3>Choose a language for easy browsing:</h3>
<ul class="languages">
<li><a href="/all?language=actionscript">ActionScript</a></li>
<li><a href="/all?language=actionscript-3">ActionScript 3</a></li>
<li><a href="/all?language=apache">Apache</a></li>
<li><a href="/all?language=applescript">AppleScript</a></li>
<li><a href="/all?language=asp">ASP</a></li>
<li><a href="/all?language=assembler">Assembler</a></li>
<li><a href="/all?language=autoit">AutoIt</a></li>
<li><a href="/all?language=awk">Awk</a></li>
<li><a href="/all?language=bash">Bash</a></li>
<li><a href="/all?language=c">C</a></li>
<li><a href="/all?language=c-sharp">C#</a></li>
<li><a href="/all?language=c-plus-plus">C++</a></li>
<li><a href="/all?language=clojure">Clojure</a></li>
<li><a href="/all?language=cold-fusion">ColdFusion</a></li>
<li><a href="/all?language=css">CSS</a></li>
<li><a href="/all?language=delphi">Delphi</a></li>
<li><a href="/all?language=diff">Diff</a></li>
<li><a href="/all?language=django">Django</a></li>
<li><a href="/all?language=dos">DOS Batch</a></li>
<li><a href="/all?language=emacs-lisp">Emacs Lisp</a></li>
<li><a href="/all?language=ez-publish">eZ Publish</a></li>
<li><a href="/all?language=forth">Forth</a></li>
<li><a href="/all?language=fortran">Fortran</a></li>
<li><a href="/all?language=gnuplot">Gnuplot</a></li>
<li><a href="/all?language=groovy">Groovy</a></li>
<li><a href="/all?language=haml">HAML</a></li>
<li><a href="/all?language=haskell">Haskell</a></li>
<li><a href="/all?language=html">HTML</a></li>
<li><a href="/all?language=iphone">iPhone</a></li>
<li><a href="/all?language=java">Java</a></li>
<li><a href="/all?language=javascript">JavaScript</a></li>
<li><a href="/all?language=jquery">jQuery</a></li>
<li><a href="/all?language=latex">LaTeX</a></li>
<li><a href="/all?language=lighttpd">lighttpd</a></li>
<li><a href="/all?language=lisp">Lisp</a></li>
<li><a href="/all?language=lua">Lua</a></li>
<li><a href="/all?language=make">Makefile</a></li>
<li><a href="/all?language=matlab">MatLab</a></li>
<li><a href="/all?language=maxscript">Maxscript</a></li>
<li><a href="/all?language=mel">Mel</a></li>
<li><a href="/all?language=mxml">MXML</a></li>
<li><a href="/all?language=mysql">MySQL</a></li>
<li><a href="/all?language=newtonscript">NewtonScript</a></li>
<li><a href="/all?language=objective-c">Objective C</a></li>
<li><a href="/all?language=open-firmware">Open Firmware</a></li>
<li><a href="/all?language=other">Other</a></li>
<li><a href="/all?language=pascal">Pascal</a></li>
<li><a href="/all?language=perl">Perl</a></li>
<li><a href="/all?language=php">PHP</a></li>
<li><a href="/all?language=picbasic">PicBasic</a></li>
<li><a href="/all?language=plsql">PL/SQL</a></li>
<li><a href="/all?language=processing">Processing</a></li>
<li><a href="/all?language=prolog">Prolog</a></li>
<li><a href="/all?language=pseudocode">Pseudocode</a></li>
<li><a href="/all?language=python">Python</a></li>
<li><a href="/all?language=r">R</a></li>
<li><a href="/all?language=rails">Rails</a></li>
<li><a href="/all?language=regex">Regular Expression</a></li>
<li><a href="/all?language=revolution">Revolution</a></li>
<li><a href="/all?language=ruby">Ruby</a></li>
<li><a href="/all?language=sas">SAS</a></li>
<li><a href="/all?language=sass">SASS</a></li>
<li><a href="/all?language=scala">Scala</a></li>
<li><a href="/all?language=scheme">Scheme</a></li>
<li><a href="/all?language=smalltalk">SmallTalk</a></li>
<li><a href="/all?language=smarty">Smarty</a></li>
<li><a href="/all?language=sml">SML</a></li>
<li><a href="/all?language=spss">SPSS</a></li>
<li><a href="/all?language=sql">SQL</a></li>
<li><a href="/all?language=svn">SVN</a></li>
<li><a href="/all?language=symfony">Symfony</a></li>
<li><a href="/all?language=tcl">TCL</a></li>
<li><a href="/all?language=textpattern">Textpattern</a></li>
<li><a href="/all?language=typo3">TYPO3</a></li>
<li><a href="/all?language=vbnet">VB.NET</a></li>
<li><a href="/all?language=vhdl">VHDL</a></li>
<li><a href="/all?language=visual-basic">Visual Basic</a></li>
<li><a href="/all?language=w-language">W-Language</a></li>
<li><a href="/all?language=windows-powershell">Windows PowerShell</a></li>
<li><a href="/all?language=windows-registry">Windows Registry</a></li>
<li><a href="/all?language=xhtml">XHTML</a></li>
<li><a href="/all?language=xml">XML</a></li>
<li><a href="/all?language=xslt">XSLT</a></li>
</ul>
<br/><br/>
</div>
<script type="b4ea21417e73bd38723ffe34-text/javascript">

    var _gaq = _gaq || [];
    _gaq.push([\'_setAccount\', \'UA-157360646-1\']);
    _gaq.push([\'_trackPageview\']);

    (function () {
        var ga = document.createElement(\'script\');
        ga.type = \'text/javascript\';
        ga.async = true;
        ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
        var s = document.getElementsByTagName(\'script\')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<script type="b4ea21417e73bd38723ffe34-text/javascript" src="https://platform.twitter.com/widgets.js"></script>
<script type="b4ea21417e73bd38723ffe34-text/javascript" src="/js/jscharts.js?v3" charset="utf-8"></script>
<script type="b4ea21417e73bd38723ffe34-text/javascript" src="//www.google.com/recaptcha/api.js?hl=en"></script>
<script type="b4ea21417e73bd38723ffe34-text/javascript" src="/js/jquery-3.4.1.min.js?v3"></script>
<script type="b4ea21417e73bd38723ffe34-text/javascript" src="/js/chosen.jquery.js?v3"></script>
<script type="b4ea21417e73bd38723ffe34-text/javascript">

        /**
         *
         * @param {string} dataType
         * @param {string} methodType
         * @param {string} url
         * @param {object} data
         * @param {boolean} async
         * @returns {jqXHR}
         */
        function sendAjaxRequest(dataType, methodType, url, data, async = true) {
            return $.ajax({
                dataType: dataType,
                type: methodType,
                url: url,
                data: data,
                statusCode: {
                    404: function () {
                        alert("page not found");
                    }
                },
                async: async
            });
        }

        function fav(id) {
            const startSelector = $("#star_" + id);
            if (startSelector.attr(\'src\').includes("/img/icon_fav_on.jpg?v3") > 0) {
                sendAjaxRequest(\'json\', \'POST\', \'/ajax/remove-favorite/varSnippetId\'.replace(\'varSnippetId\', id), {})
                    .done(data => {
                        startSelector.attr(\'src\', "/img/icon_fav_off.jpg?v3");
                    });
            } else {
                sendAjaxRequest(\'json\', \'POST\', \'/ajax/add-favorite/varSnippetId\'.replace(\'varSnippetId\', id), {})
                    .done(data => {
                        startSelector.attr(\'src\', "/img/icon_fav_on.jpg?v3");
                    });
            }
            return false;
        }

        let selectedSnippet = 0;

        function loadFolderList(snippetId) {
            selectedSnippet = snippetId;
            $(\'#folder-html\').html("");
            $(\'#folder-menu\').show(\'fast\');
            $(\'#indicator\').show();
            sendAjaxRequest(\'json\', \'GET\', \'/folder-snippet-list/varSnippet\'.replace(\'varSnippet\', snippetId), {})
                .done(item => {
                    $(\'#indicator\').hide();
                    let html = \'<ul class="folder-list">\';
                    Object.entries(item.list).forEach(([key, value]) => {
                        html += "<li><label><input type=\'checkbox\' class=\'folder-item\' value=\'" + key + "\' " + (value.checked ? \'checked\' : \'\') + "> " + value.name + "</label></li>";
                    });
                    html += \'</ul>\';
                    $(\'#folder-html\').html(html);

                    $(\'.folder-item:checkbox\').change(function () {
                        const act = ($(this).is(\':checked\')) ? "/ajax/add-folder-snippet/varSnippet/varFolder" : "/ajax/remove-folder-snippet/varSnippet/varFolder";
                        const url = act.replace(\'varSnippet\', snippetId).replace("varFolder", $(this).val());
                        sendAjaxRequest(\'json\', \'POST\', url, {})
                            .done(data => {
                                const folderMsgSelector = $(\'#folder-msg\');
                                if ($(this).is(\':checked\')) {
                                    folderMsgSelector.html(\'Snippet added to folder\');
                                } else {
                                    folderMsgSelector.html(\'Snippet removed from folder\');
                                }
                            });
                    });
                });
        }

        $(\'#folder_close\').click(function () {
            $(\'#folder-menu\').hide(\'fast\');
        });
        $(\'#folder-add\').submit(function () {
            const folderNameSelector = $(\'#folder-name\');
            let name = $.trim(folderNameSelector.val());
            $(\'#folder-error\').text("");
            sendAjaxRequest(\'json\', \'POST\', \'/add-folder\', {\'name\': name})
                .done(item => {
                    if(item.status === "SUCCESS") {
                        folderNameSelector.val("");
                        loadFolderList(selectedSnippet);
                    }else{
                        $(\'#folder-error\').text(item.errors.join(\', \'));
                    }

                });
            return false;
        });

    </script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b4ea21417e73bd38723ffe34-|49" defer></script></body>
</html>
'
];
