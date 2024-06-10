<?php
declare(strict_types = 1);

return [
    'headers' => [
        'content-type' => [
            'text/html; charset=utf-8'
        ],
        'vary' => [
            'Sec-Fetch-Dest, Sec-Fetch-Mode, Sec-Fetch-Site'
        ],
        'cache-control' => [
            'no-cache, no-store, max-age=0, must-revalidate'
        ],
        'pragma' => [
            'no-cache'
        ],
        'expires' => [
            'Mon, 01 Jan 1990 00:00:00 GMT'
        ],
        'date' => [
            'Mon, 10 Jun 2024 15:59:25 GMT'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'p3p' => [
            'CP="This is not a P3P policy! See g.co/p3phelp for more info."'
        ],
        'content-security-policy' => [
            'require-trusted-types-for \'script\';report-uri https://csp.withgoogle.com/csp/docs-tt',
            'script-src \'report-sample\' \'nonce-mQqRN69ZEZJ8p8nfzs2Kkg\' \'unsafe-inline\' \'unsafe-eval\' \'strict-dynamic\' https: http:;object-src \'none\';base-uri \'self\';report-uri https://csp.withgoogle.com/csp/viewer/'
        ],
        'referrer-policy' => [
            'strict-origin-when-cross-origin'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'server' => [
            'GSE'
        ],
        'set-cookie' => [
            'NID=514=EOSrMAp2z1M8HezfLc1u6VBCb92K_HT5UZHl1cCFqe5tUnZRfb95ReN2d2qfX12x_y7CMX3V0f8_1Ga_NNHO1pFE3le5TM90ennQ_U8rrJ9ChDXrHJmyZtY6SxabcO2tbddffRpALv0LVLooImIcgEIYyZoEdT2aSP0oKRCVdgD2MvQ9Ql0qyw; expires=Tue, 10-Dec-2024 15:59:25 GMT; path=/; domain=.google.com; Secure; HttpOnly; SameSite=none'
        ],
        'alt-svc' => [
            'h3=":443"; ma=2592000,h3-29=":443"; ma=2592000'
        ],
        'Content-Location' => [
            'https://drive.google.com/file/d/0B2rwN8wAbVSWbmFJdUdnV2VSTTg/view'
        ],
        'X-Request-Time' => [
            '0.506 ms'
        ]
    ],
    'statusCode' => 401,
    'reasonPhrase' => 'Unauthorized',
    'body' => '<!DOCTYPE html><style nonce="qz9zTrI66XOIuyk12MzjfQ">body{height:100%;margin:0;width:100%}@media (max-height:350px){.button{font-size:10px}.button-container{margin-top:16px}.button.primary-button,.button.primary-button:active,.button.primary-button:focus,.button.primary-button:hover{padding:4px 12px}.title-text{font-size:22px;line-height:24px}.subtitle-text{font-size:12px;line-height:18px}}@media (min-height:350px){.button{font-size:14px}.button-container{margin-top:16px}.button.primary-button,.button.primary-button:active,.button.primary-button:focus,.button.primary-button:hover{padding:12px 24px}.title-text{font-size:28px;line-height:36px}.subtitle-text{font-size:16px;line-height:24px}}.document-root{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;inset:0;position:absolute}.error,.login,.request-storage-access{display:none}.error,.login,.request-storage-access,.too-many-login-redirects{margin:auto;padding:36px}.document-root.show-error .error,.document-root.show-login-page .login,.document-root.show-storage-access .request-storage-access,.too-many-login-redirects{-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-moz-box-orient:vertical;-moz-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.button-container{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center}.button{border:none;cursor:pointer;color:#0b57d0;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;font-family:Google Sans Text,Roboto,sans-serif;border-radius:100px;padding:12px;margin:0 8px;text-decoration:none}.button:hover{background-color:rgba(11,87,208,.078)}.button:active,.button:focus{background-color:rgba(11,87,208,.122)}.button.primary-button,.button.primary-button:active,.button.primary-button:focus,.button.primary-button:hover{background-color:#0b57d0;color:#fff}.button.primary-button:hover{box-shadow:0 1px 3px 1px rgba(0,0,0,.149),0 1px 2px 0 rgba(0,0,0,.302)}.icon{height:48px;margin-bottom:16px}.title-text{font-family:Google Sans,Roboto,sans-serif;text-align:center}.subtitle-text{font-family:Google Sans Text,Roboto,sans-serif;margin-top:16px;text-align:center}
/*# sourceMappingURL=style.css.map */</style><script nonce="mQqRN69ZEZJ8p8nfzs2Kkg">\'use strict\';function h(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}function k(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];if(b)return b.call(a);if("number"==typeof a.length)return{next:h(a)};throw Error(String(a)+" is not an iterable or ArrayLike");};var l=["storage_access_granted","not_in_iframe","login_counter"];function m(a,b,c){c=void 0===c?"true":c;a=new URL(a);for(var d=0;d<l.length;d++)a.searchParams.delete(l[d]);a.searchParams.set(b,c);return a.toString()};/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
/*

 SPDX-License-Identifier: Apache-2.0
*/
function n(){var a=new p,b=new q,c=document.getElementsByClassName("document-root")[0],d=this;this.g=new r;this.h=a;this.l=b;this.i=c;c.getElementsByClassName("accept-button")[0].addEventListener("click",function(){return void t(d)});c.getElementsByClassName("sign-in-button")[0].addEventListener("click",function(e){return void u(d,e)})}
function v(){var a=new n;w()?x()||"function"!==typeof document.hasStorageAccess||"function"!==typeof document.requestStorageAccess?y(a,"show-login-page"):a.h.hasStorageAccess().then(function(b){b?y(a,"show-login-page"):z().then(function(c){"prompt"===c?y(a,"show-storage-access"):"granted"===c?t(a):y(a,"show-error")})},function(){y(a,"show-error")}):A(a,window.location.href,"not_in_iframe")}
function A(a,b,c){c=c?m(b,c):b;if(a.g.get()){if(b=a.g.get())c=B(c),c=C(c),void 0!==c&&(b.action=c);a.g.submit()}else window.location.href===c?window.location.reload():(a=window.location,b=B(c)||D,b=C(b),void 0!==b&&(a.href=b))}function y(a,b){a.i.className="document-root "+b}function t(a){a.h.requestStorageAccess().then(function(){A(a,window.location.href,"storage_access_granted")},function(){y(a,"show-error")})}
function u(a,b){var c;if(b=null==(c=b.currentTarget)?void 0:c.getAttribute("data-popup-url")){var d=E(window,B(b)||D);F(a.l,function(){d&&d.close();var e=window.location.href;var f=(new URL(e)).searchParams,g=1;f.has("login_counter")&&(f=Number(f.get("login_counter")),isFinite(f)&&(g=f+1));e=m(e,"login_counter",String(g));A(a,e)})}};function G(a){this.g=a}G.prototype.toString=function(){return this.g};var D=new G("about:invalid#zClosurez");function H(a){this.j=a}function I(a){return new H(function(b){return b.substr(0,a.length+1).toLowerCase()===a+":"})}var J=[I("data"),I("http"),I("https"),I("mailto"),I("ftp"),new H(function(a){return/^[^:]*([/?#]|$)/.test(a)})];function B(a){var b=void 0===b?J:b;if(a instanceof G)return a;for(var c=0;c<b.length;++c){var d=b[c];if(d instanceof H&&d.j(a))return new G(a)}}var K=/^\\s*(?!javascript:)(?:[\\w+.-]+:|[^:/?#]*(?:[/?#]|$))/i;
function C(a){if(a instanceof G)if(a instanceof G)a=a.g;else throw Error("");else a=K.test(a)?a:void 0;return a};function E(a,b){b=C(b);return void 0!==b?a.open(b,"popupWindow","popup=yes,height=500,width=690"):null};function r(){}r.prototype.get=function(){return document.querySelector("form")};r.prototype.submit=function(){var a;null==(a=this.get())||a.submit()};function L(a){for(var b=k(document.cookie.split(";")),c=b.next();!c.done;c=b.next())if(c=c.value.split("="),c[0].trim()===a)return c[1]};function q(){this.h=["SAPISID","__Secure-1PAPISID","__Secure-3PAPISID"];this.g=void 0}function F(a,b){a.g&&clearInterval(a.g);for(var c={},d=k(a.h),e=d.next();!e.done;e=d.next())e=e.value,c[e]=L(e);a.g=setInterval(function(){a:{var f=k(a.h);for(var g=f.next();!g.done;g=f.next())if(g=g.value,void 0!==L(g)&&c[g]!==L(g)){f=!0;break a}f=!1}f&&(clearInterval(a.g),a.g=void 0,b())},1E3)};function w(){var a=!0;try{a=window.self!==window.top}catch(b){}return a};function p(){}p.prototype.hasStorageAccess=function(){return document.hasStorageAccess()};function z(){return navigator.permissions.query({name:"storage-access"}).then(function(a){return a.state}).catch(function(){return"prompt"})}p.prototype.requestStorageAccess=function(){return document.requestStorageAccess()};
function x(){if(window.navigator.userAgentData&&window.navigator.userAgentData.brands)for(var a=window.navigator.userAgentData.brands,b=0;b<a.length;b++){var c=a[b];if("Google Chrome"===c.brand)return"115"===c.version||"116"===c.version}return!1};"complete"===document.readyState?v():document.addEventListener("DOMContentLoaded",M);function M(){v()};
</script><div class="document-root loading"><div class="request-storage-access"><div><img src=&#47;&#47;ssl.gstatic.com&#47;docs&#47;common&#47;product&#47;google_app_icon1.png alt=Google class="icon"></div><div class="title-text">Permite que Google acceda a tus cookies necesarias</div><div class="subtitle-text">No podrás acceder a este contenido si las cookies necesarias están desactivadas</div><div class="button-container"><a target="cookieAccessHelp" href="https://support.google.com/drive?p=enable_storage_access" class=" button">Más información</a><button type="button" class="accept-button button primary-button">Permitir cookies</button></div></div><div class="login"><div><img src=https:&#47;&#47;www.gstatic.com&#47;images&#47;branding&#47;googleg&#47;1x&#47;googleg_standard_color_48dp.png alt=Logotipo&#32;de&#32;Google class="icon"></div><div class="title-text">Accede a tu cuenta de Google</div><div class="subtitle-text">Debes iniciar sesión para acceder a este contenido</div><div class="button-container"><button type="button" class="sign-in-button button primary-button" data-popup-url=https:&#47;&#47;accounts.google.com&#47;ServiceLogin?continue&#61;https:&#47;&#47;drive.google.com&#47;file&#47;d&#47;0B2rwN8wAbVSWbmFJdUdnV2VSTTg&#47;view&amp;btmpl&#61;popup&amp;hl&#61;es>Iniciar sesión</button></div></div><div class="error"><div><img src=https:&#47;&#47;www.gstatic.com&#47;images&#47;branding&#47;googleg&#47;1x&#47;googleg_standard_color_48dp.png alt=Logotipo&#32;de&#32;Google class="icon"></div><div class="title-text">No se puede acceder a tu cuenta de Google</div><div class="subtitle-text">Ahora mismo no podemos acceder a este contenido. Prueba a iniciar sesión en tu cuenta de Google o a permitir el acceso a las cookies para continuar.</div><div class="button-container"><a target="cookieAccessHelp" href="https://support.google.com/drive?p=enable_storage_access" class="primary-button button">Más información</a></div></div></div>'
];
