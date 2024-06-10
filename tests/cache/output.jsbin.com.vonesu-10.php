<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:58:48 GMT'
        ],
        'content-type' => [
            'text/html; charset=utf-8'
        ],
        'transfer-encoding' => [
            'chunked'
        ],
        'connection' => [
            'keep-alive'
        ],
        'set-cookie' => [
            'jsbin=; Path=/; Expires=Thu, 01 Jan 1970 00:00:00 GMT',
            'session=eyJ2ZXJzaW9uIjoiNC4xLjgiLCJjc3JmU2VjcmV0IjoiVl9QZ2RRaWpsdjlTMGpZVnpxQ3pfb2Q3In0=; path=/; expires=Tue, 10 Jun 2025 15:58:48 GMT; domain=.jsbin.com; httponly',
            'session.sig=CaCQoRW37AtKxW14tdzpivhIo0I; path=/; expires=Tue, 10 Jun 2025 15:58:48 GMT; domain=.jsbin.com; httponly'
        ],
        'x-robots-tag' => [
            'nofollow'
        ],
        'x-bin-id' => [
            '28610872'
        ],
        'x-bin-url' => [
            'vonesu'
        ],
        'x-bin-revision' => [
            '10'
        ],
        'etag' => [
            'W/"f55-IojPR6L49U28VB5rAET2G34sKd8"'
        ],
        'vary' => [
            'Accept-Encoding'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'x-route' => [
            'node'
        ],
        'Content-Location' => [
            'http://output.jsbin.com/vonesu/10'
        ],
        'X-Request-Time' => [
            '0.216 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2024 by thatemil (http://jsbin.com/vonesu/10/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>

<style id="jsbin-css">
body {
  font-family: Avenir Next, SegoeUI, sans-serif;
  color: #333;
  background-color: #fff;
}

table {
  text-align: left;
  margin: 1.5em 0;
  width: 100%;
  max-width: 45em;
}
caption {
  font-style: italic;
}
caption:after {
  content: \'\';
  display: block;
  width: 2em;
  height: 1px;
  background-color: #ccc;
  margin: .5em auto;
}
td {
  padding: .5em .25em;
}

thead {
  vertical-align: bottom;
  
}
thead th {
  border-bottom: 1px solid;
}

tbody tr:nth-child(even) {
  background-color: #efefef;
}
</style>
</head>
<input aria-labelledby="searchtext" type="search" placeholder="…">
<button type="submit" id="searchtext">
Search label
</button>
  
  <table>
    <caption>Results when focusing search field</caption>
    <thead>
      <tr>
        <th scope="col">Browser</th>
        <th scope="col">Screen reader</th>
        <th scope="col">OS</th>
        <th scope="col">Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Chrome 51</td>
        <td>VoiceOver</td>
        <td>Mac OS 10.11</td>
        <td>Reads ”ellipse, insert at start of text, Search label, text”</td>
      </tr>
      <tr>
        <td>Firefox 47</td>
        <td>VoiceOver</td>
        <td>Mac OS 10.11</td>
        <td>Reads ”Search label, text”</td>
      </tr>
      <tr>
        <td>Safari 9</td>
        <td>VoiceOver</td>
        <td>Mac OS 10.11</td>
        <td>Reads ”ellipse, Search label, search text field”</td>
      </tr>
      <tr>
        <td>IE10</td>
        <td>NVDA 2015.3</td>
        <td>Windows 8</td>
        <td>Reads ”Search label, edit, blank”</td>
      </tr>
      <tr>
        <td>Chrome 46</td>
        <td>NVDA 2015.3</td>
        <td>Windows 8</td>
        <td>Reads ”Search label, edit, blank”</td>
      </tr>
      <tr>
        <td>Firefox 41</td>
        <td>NVDA 2015.3</td>
        <td>Windows 8</td>
        <td>Reads ”Search label, editable, autocomplete, blank”</td>
      </tr>
      <tr>
        <td>IE10</td>
        <td>JAWS 13</td>
        <td>Windows 8</td>
        <td>Reads ”Search label, edit, type in text”</td>
      </tr>
      <tr>
        <td>Opera 36</td>
        <td>JAWS 13</td>
        <td>Windows 8</td>
        <td>Reads ”Search label, edit, ellipsis, ellipsis”</td>
      </tr>
      <tr>
        <td>IE9</td>
        <td>JAWS 15</td>
        <td>Windows 7</td>
        <td>Reads ”Search label, edit, type in text”</td>
      </tr>
      <tr>
        <td>IE9</td>
        <td>Window-Eyes 9.4</td>
        <td>Windows 7</td>
        <td>Reads ”Search label, edit”</td>
      </tr>
    </tbody>
  </table>
  
  <p>Comment: Chrome and Safari (Mac) seem to be the only browsers that read placeholder text, so far. Safari seems to still read the placeholder text even when there is another value inside the text field.</p>
<script src="http://static.jsbin.com/js/render/edit.js?4.1.8"></script>
<script>jsbinShowEdit && jsbinShowEdit({"static":"http://static.jsbin.com","root":"http://jsbin.com"});</script>
<script>
(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

ga(\'create\', \'UA-1656750-34\', \'auto\');
ga(\'require\', \'linkid\', \'linkid.js\');
ga(\'require\', \'displayfeatures\');
ga(\'send\', \'pageview\');

</script>

</body>
</html>'
];
