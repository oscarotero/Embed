<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'nginx'
        ],
        'date' => [
            'Sun, 04 Apr 2021 15:27:27 GMT'
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
        'keep-alive' => [
            'timeout=60'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'x-download-options' => [
            'noopen'
        ],
        'x-permitted-cross-domain-policies' => [
            'none'
        ],
        'referrer-policy' => [
            'strict-origin-when-cross-origin'
        ],
        'etag' => [
            'W/"70d1f57fe0af4b3e55ab8829b57a09fa"'
        ],
        'cache-control' => [
            'max-age=0, private, must-revalidate'
        ],
        'set-cookie' => [
            'csrftoken=RzjVtdlWK29aoci9rUV6yjuaKd6SLIFz%2BEENMn3so4pifrwAkqnr%2BvGN59JsQo1aO5dkExArqq0jBOQvD7HSpw%3D%3D; path=/',
            '_jsfiddle_session=uLb9a9FaGpNeOcFlLATktZmL%2FLgntDNqzH2Ey1VUdrfacS5WCa4I8dD69KWMzfZeiL0ap6TvvPgU%2FYwkW1BTmnw1FUVwDpGJlYSt0rzdiiIv7vprY1N4YqEOkx%2Bou3vPVvsQVU%2FKi6JmecxiXZOV0hbqZhMeYU%2FlVgWlFq0AQdSw6AbfxbTK42KyhHzjQDIZrXqnRzuWb2J9UsCja%2BbE64fxPGGQ19XYo%2FiAo3NiHpDWBG8OPIhMqowJVoyUkRUNsNaz6xQm8VkMfb2FEaDFzmEqW8miW5abNg%3D%3D--ELf%2BWl3pFF9lak4O--rfdwTq4aPm8%2BZxF6rn%2Fi4g%3D%3D; path=/; HttpOnly'
        ],
        'x-request-id' => [
            '1d888674-c9e6-4e77-98e8-4b602c530368'
        ],
        'x-runtime' => [
            '0.037209'
        ],
        'vary' => [
            'Origin'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'Content-Location' => [
            'http://jsfiddle.net/zhm5rjnz/'
        ],
        'X-Request-Time' => [
            '1.424 ms'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Test your JavaScript, CSS, HTML or CoffeeScript online with JSFiddle code editor.">
    <meta name="keywords" content="online javascript editor, testing javascript online, online ide, online code editor, html, css, coffeescript, scss online editor">
    <meta name="author" content="JSFiddle">
    <meta name="copyright" content="share alike">

      <meta name="robots" content="index, follow">
      <meta name="googlebot" content="index, follow">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2E71FF">

    <script>
      var EditorConfig = {
        shell: true,
        paths: {
          favorite:         "/_make_favourite/",
          media:            "/mooshellmedia/",
          addResource:      "/_add_external_resource/",
          render:           "//fiddle.jshell.net/zhm5rjnz/show/?editor_console=",
          saveSettings:     "/_editor_options/",
          fork:             "/_fork/",
          save:             "/_save/",
          update:           "/_update/zhm5rjnz/",
          loadDependencies: "/_get_dependencies/{lib_id}/",
          showProfile:      "/_show_profile/"
        },
        value: {
          html: "",
          js:   "var processForm = function (data) {\\n    if (data.error) {\\n        console.log(\\\'got error\\\');\\n    }\\n\\n    console.log(\\\'got data\\\');\\n};\\n\\n\\$.ajax({\\n    url: url\\n})\\n.success(function (data) {\\n        processForm(data);\\n})\\n.fail(function (response, error, status) {\\n    var errorMessage;\\n\\n    try {\\n        errorMessage = JSON.parse(response.responseText);\\n    } catch (e) {\\n        errorMessage = response.responseText;\\n    }\\n\\n    if (typeof errorMessage === \\\'object\\\') {\\n        processForm(errorMessage);\\n    } else {\\n        throw new Error(errorMessage);\\n    }\\n});",
          css:  ""
        },
        fiddle: {
          id:   "222985940",
          slug: "zhm5rjnz",
          boilerplate: false
        },
        panels: {
          html: "html",
          js:   "javascript",
          css:  "css"
        },
        user: {
          id:       "None",
          username: ""
        },
        // showHelloBar: false,
        showHelloBar: false,
        currentUser:  false,
        isAuthor:     false,
        features: {
          toggleSidebar: false
        }
      }

      // translations
      const I18n = {
        editor: {
          panels: {
            result: "Result",
            drag_to_reorder: "Drag tabs to reorder",
            tidy: "Tidy"
          },
          sidebar: {
            toggle_sidebar: "Toggle sidebar"
          },
          groups: {
            placeholder_value:        "Assign to groups",
            search_placeholder_value: "Search for groups",
            no_choices_text:          "No more groups",
            no_results_text:          "No groups found",
            item_select_text:         "Press to select",
            you_have_no_groups:       "You have no groups"
          }
        }
      }

        const EditorUISettings = {
          // options that user can change
          layout:            1,
          darkTheme:         true,
          tabSize:           2,
          matchBrackets:     true,
          lineNumbers:       true,
          lineWrapping:      true,
          keyMap:            "default",
          autoCloseTags:     true,
          autoCloseBrackets: true,
          indentWithTabs:    false,
          codeLinting:       true,
          autoRun:           EditorConfig.currentUser ? false : false,
          autoRunValid:      EditorConfig.currentUser ? true : false,
          autoSave:          EditorConfig.currentUser ? true : false,
          clearConsole:      false,
          fontSize:          1,
          matchTags:         false,
          foldGutter:        true,
          reduceHelloBar:    false,
          codeHints:         false,
          editorConsole:     true
        }
    </script>

    <style id=\'skeleton-theme-inline\'>*,body,button,html,input,select,textarea{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}a{color:#39464e;text-decoration:none}a:hover{text-decoration:underline}input,select,textarea{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"}select{cursor:pointer}blockquote,body,dd,div,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,input,li,ol,p,pre,td,textarea,th,ul{margin:0;padding:0}table{border-collapse:collapse;border-spacing:0}fieldset,img{border:0}address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal}abbr,acronym{border:0}::-webkit-input-placeholder{color:#8d8f91}:-moz-placeholder,::-moz-placeholder{color:#8d8f91}:-ms-input-placeholder{color:#8d8f91}.icon{stroke:inherit}a:active,a:focus,button::-moz-focus-inner,button:focus,input[type=button]::-moz-focus-inner,input[type=file]>input[type=button]::-moz-focus-inner,input[type=reset]::-moz-focus-inner,input[type=submit]::-moz-focus-inner,select::-moz-focus-inner{outline:none!important}select:-moz-focusring{color:transparent;text-shadow:0 0 0 #000}.checkboxCont{cursor:pointer}.checkboxCont .checkbox{position:relative;background:rgba(0,0,0,.1);display:inline-block;vertical-align:middle;border-radius:14px;width:24px;height:14px;margin-right:5px;top:-2px;transition:all .15s}.checkboxCont .checkbox:after{content:"";border-radius:12px;position:absolute;top:1px;left:1px;width:12px;height:12px;background:#fff;display:block;transition:left .15s;box-shadow:0 2px 4px 0 rgba(0,0,0,.2),0 0 1px 0 rgba(0,0,0,.21)}.checkboxCont input[type=checkbox]{display:none}.checkboxCont input[type=checkbox]:checked+.checkbox{background:#2e71ff}.checkboxCont input[type=checkbox]:checked+.checkbox:after{left:11px}.checkboxCont input[type=checkbox]:disabled+.checkbox{background:rgba(0,0,0,.1)}.checkboxCont input[type=checkbox]:disabled+.checkbox:after{opacity:.5}.checkboxCont small{color:rgba(0,0,0,.3);font-size:inherit}.proBadgeSelf{display:none}.proBadge .proBadgeSelf{display:inline-block;background:#f3ca63;color:#1a1d21;padding:0 3px;height:13px;border-radius:2px;line-height:13px;font-size:9px;font-weight:bold;overflow:hidden;position:relative;bottom:-2px;left:3px;text-transform:uppercase}.proBadge .proBadgeSelf:hover{text-decoration:none;background:#f8e2aa}#sidebar .proBadgeSelf{color:#1a1d21}.groupsList{overflow:auto;max-height:150px;margin-top:10px}.groupsList .privateGroup{height:10px;display:inline-block;padding:2px;border-radius:2px;background:inherit;vertical-align:bottom}.groupsList .privateGroup g{stroke:#8d8f91}.groupsList li{margin-bottom:5px}.groupsList li input,.groupsList li span{display:inline-block}.groupsList li span{color:inherit;max-width:140px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;vertical-align:bottom;margin-left:5px}.groupsList label{font-size:13px;cursor:pointer}a{outline:none}body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";background:#1f2227;padding:0;margin:0;font-size:14px;color:#39464e}#progressbar{height:3px;position:absolute;top:60px;left:0;right:0;z-index:110;pointer-events:none}header{height:60px;background:#1a1d21;box-shadow:0 0 5px rgba(26,29,33,0);z-index:100;width:100vw}header .title{position:absolute;top:-9000em}header h1{position:absolute;top:14px;left:10px;z-index:800;transition:all .15s}header h1 a{display:block}header h1 svg{transition:all .15s;position:relative;height:33px;width:46px;stroke:#2e71ff}#app-updates{float:left;position:relative;width:20px}#app-updates .bodyCont{opacity:1;transition:all .1s;transform:translateY(0);margin-left:10px;overflow:hidden;height:60px;width:300px}#app-updates .body{color:#fbfbfb;transition:all .1s;background:transparent;padding:14px;border-radius:3px;line-height:1.45em;font-size:13px;position:relative;top:6px;width:300px}#app-updates strong{font-weight:700}#app-updates h3{text-overflow:ellipsis;width:100%;white-space:nowrap;overflow:hidden}#app-updates p{margin-top:10px}#app-updates p a{font-weight:700}#app-updates .updateActions,#app-updates p{pointer-events:none;opacity:0}#app-updates .updateActions{margin-top:12px;text-align:right}#app-updates .updateActions a{color:#8d8f91;font-size:12px;padding:3px 6px;border:1px solid transparent;border-radius:4px}#app-updates .updateActions a:hover{border:1px solid hsla(210,2%,56%,.2);text-decoration:none}#app-updates .badge{background:#26aa5a;color:#fff;font-size:11px;padding:3px 6px;border-radius:3px;margin-right:5px;font-weight:400}#app-updates.hidden .bodyCont,#app-updates:hover .bodyCont{overflow:visible}#app-updates.hidden .body,#app-updates:hover .body{background:#fff;color:#39464e;box-shadow:0 0 1px rgba(57,70,78,.15),0 20px 55px -8px rgba(57,70,78,.25)}#app-updates.hidden h3,#app-updates:hover h3{text-overflow:inherit;white-space:normal;overflow:auto;font-weight:700}#app-updates.hidden .updateActions,#app-updates.hidden p,#app-updates:hover .updateActions,#app-updates:hover p{pointer-events:auto;opacity:1}#app-updates.hidden{transform:translateY(20px)}#app-updates-highlighter,#app-updates.hidden,#app-updates.hidden .updateActions,#app-updates.hidden p{pointer-events:none;opacity:0}#app-updates-highlighter{position:absolute;border:3px solid #26aa5a;border-radius:5px;transition:all .1s;transform:scale(1.05);z-index:1000}#app-updates-highlighter.show{opacity:1;transform:scale(1)}#layout-container{position:relative;display:grid;grid-template-columns:210px 1fr;grid-template-areas:"sidebar content"}#show-result{height:100vh}#content{grid-area:content;position:relative}#content #toggle-sidebar{position:absolute;left:-10px;top:calc(100vh - 110px);width:15px;height:40px;background:#1a1d21;border:1px solid #2c2f34;z-index:100;border-radius:2px;display:flex;justify-content:center}#content #toggle-sidebar svg{height:inherit;width:inherit}#content #toggle-sidebar g{stroke:#626468}#content #toggle-sidebar:hover{border:1px solid #2e71ff}#content #toggle-sidebar:hover g{stroke:#e9e9e9}#content #toggle-sidebar:hover:after{content:attr(data-title);display:block;background:#2e71ff;color:#fff;border-radius:3px;padding:4px 8px;position:absolute;top:calc(50% - 11px);left:22px;z-index:20;white-space:nowrap}#sidebar{grid-area:sidebar;padding:0;margin:0;font-size:12px;border-right:1px solid #2c2f34;background:#1f2227;display:flex;flex-direction:column;color:#cfd0d1;box-shadow:0 0 0 rgba(0,0,0,.5);position:relative}#sidebar #s-cont{flex-grow:1;opacity:0;pointer-events:none}#sidebar #profile-segment{padding:20px 10px;border-bottom:1px solid #2c2f34}#sidebar #profile-segment.hidden{display:none}#sidebar .userSidebar .userProfile{display:grid;font-size:14px;grid-template-columns:45px 1fr;grid-column-gap:12px}#sidebar .userSidebar .userProfile .profileDetails{display:flex;flex-direction:column;justify-content:center}#sidebar .userSidebar .userProfile .avatar{position:relative}#sidebar .userSidebar .userProfile a{color:#fbfbfb;display:block;font-weight:700}#sidebar .userSidebar .userProfile img{overflow:hidden;border-radius:4px;box-shadow:0 0 0 1px #1a1d21,0 0 0 3px #e9e9e9;position:relative;top:1px;left:1px}#sidebar .userSidebar .userProfile .company{font-weight:400;margin-top:4px;color:#8d8f91;font-size:12px;margin-bottom:10px}#sidebar .userSidebar .userProfile .socialInfo{display:flex;column-gap:4px}#sidebar .userSidebar .userProfile .socialInfo li:not(.more){display:block}#sidebar .userSidebar .userProfile .socialInfo li:not(.more).hidden{display:none}#sidebar .userSidebar .userProfile .socialInfo:hover li.hidden{display:block}#sidebar .userSidebar .userProfile .socialInfo:hover li.more{display:none}#sidebar .userSidebar .userProfile .socialInfo svg{height:13px;width:17px;opacity:.4}#sidebar .userSidebar .userProfile .socialInfo a{display:block;border-radius:3px}#sidebar .userSidebar .userProfile .socialInfo a:hover svg{opacity:1}#sidebar .userSidebar .userDetails{clear:both;padding-top:6px;color:#fbfbfb}#sidebar .userSidebar .userDetails a{color:#fbfbfb}#sidebar .userSidebar .userDetails li{margin-top:3px}#sidebar .userSidebar.proProfile .userProfile img,#sidebar .userSidebar.teamProfile .userProfile img{box-shadow:0 0 0 1px #1a1d21,0 0 0 3px #f3ca63}#sidebar .userSidebar.proProfile .avatar:after,#sidebar .userSidebar.teamProfile .avatar:after{content:"Supporter";display:inline-block;background:#f3ca63;color:#1a1d21;padding:0 2px;height:13px;border-radius:2px;line-height:13px;font-size:9px;font-weight:bold;overflow:hidden;position:absolute;top:37px;left:-2px;width:47px;pointer-events:none;text-align:center}#sidebar .userSidebar.teamProfile .userProfile img{box-shadow:0 0 0 1px #1a1d21,0 0 0 3px #fa777c}#sidebar .userSidebar.teamProfile .avatar:after{content:"TEAM";background:#fa777c}#sidebar .userSidebar.segment{margin:0 20px}#sidebar .userSidebar.body{position:relative;top:4px}#actions{height:60px;font-size:13px;position:relative;z-index:300;margin-left:70px;opacity:0;pointer-events:none;display:grid;grid-template-columns:auto auto}#actions svg{position:relative;height:16px;left:-1px}#actions svg.rightIcon{margin-right:0;margin-left:6px}#actions .actionCont{display:flex}#actions .right{justify-content:flex-end;padding-right:10px}#actions .actionItem{position:relative;margin-right:1px}#actions .actionItem.visible{display:block}#actions .actionItem.hidden{display:none}#actions .actionItem .aiButton,#actions .actionItem .aiButton span,#actions .dropdown .actionItem a.aiButton{height:60px}#actions .actionItem a.aiButton{display:flex;outline:none;text-decoration:none;padding:0 7px;align-items:center;justify-content:center;color:#fbfbfb;position:relative}#actions .actionItem a.aiButton:after{content:"";display:block;width:100%;background:#2e71ff;height:3px;bottom:-1px;left:0;position:absolute;pointer-events:none;border-radius:3px;opacity:0;transition:all .15s;transform:scale(.95)}#actions .actionItem a.aiButton.selected:after,#actions .actionItem a.aiButton:hover:after{opacity:1;transform:scale(1)}#actions .actionItem a.aiButton.disabled{opacity:.3;pointer-events:none}#actions img{overflow:hidden;border-radius:3px;box-shadow:0 0 0 1px #1a1d21,0 0 0 2px #e9e9e9}#actions img.proProfile{box-shadow:0 0 0 1px #1a1d21,0 0 0 2px #f3ca63}#actions img.teamProfile{box-shadow:0 0 0 1px #1a1d21,0 0 0 2px #fa777c}#actions .actionItem a.aiButton span{font-size:.9em}#actions .noIcon a.aiButton span{padding:0 0 0 6px;margin-right:0}#actions .actionItem #mobile.aiButton span{margin-right:0}#actions .actionItem a.aiButton span.selected{color:#555;background:#fff}#actions .dropdown .dropdownCont li{line-height:26px}.dropdownCont{position:absolute;z-index:9000;opacity:1;transform:translateY(0);transition:opacity .12s,transform .12s;will-change:opacity,transform}.dropdownCont .dcWrapper{background-color:#fff;width:300px;padding:15px;margin:0;font-size:13px;box-shadow:0 0 1px rgba(57,70,78,.15),0 20px 55px -8px rgba(57,70,78,.25);border-radius:5px;max-height:calc(100vh - 100px);overflow:auto}.dropdownCont .dcWrapper.menu{width:200px;padding:12px 0}.dropdownCont .dcWrapper.menu li{line-height:22px;padding:0 15px 6px}.dropdownCont .dcWrapper.menu li a{color:#39464e;position:relative}.dropdownCont .dcWrapper.menu li.other{border-top:1px solid #e9e9e9;padding:6px 15px 0}.dropdownCont .dcWrapper.menu li.other+.other{border-top:none}.dropdownCont .dcWrapper.menu li.other a{color:#8d8f91}.dropdownCont .dcWrapper:before{top:-11px;border-bottom:10px solid rgba(57,70,78,.15)}.dropdownCont .dcWrapper:after,.dropdownCont .dcWrapper:before{display:block;position:absolute;right:20px;vertical-align:middle;content:"";border-left:8px solid transparent;border-right:8px solid transparent;border-style:none double solid;width:0;height:0}.dropdownCont .dcWrapper:after{top:-10px;border-bottom:10px solid #fff}.dropdownCont.center .dcWrapper:after,.dropdownCont.center .dcWrapper:before{left:50%;margin-left:-4px}.dropdownCont.hidden{opacity:0;transform:translateY(10px);pointer-events:none}.twitterCont{padding:10px;display:block;border-top:1px solid #2c2f34}#sidebar #support-jsfiddle{color:#fff;padding:15px;background:#1a1d21;border-top:3px solid #f3ca63;line-height:18px;position:absolute;bottom:-20px;left:0;right:0;opacity:0;pointer-events:none;transition:all .15s}#sidebar #support-jsfiddle p{font-size:13px;line-height:17px;margin:4px 0;color:#cfd0d1}#sidebar #support-jsfiddle h3{font-size:13px}#sidebar #support-jsfiddle a{background:#f3ca63;padding:6px 12px;display:inline-block;color:#1a1d21;font-weight:600;border-radius:3px;margin-top:10px}#sidebar #support-jsfiddle.show{bottom:0;left:0;right:0;opacity:1;pointer-events:auto}#sidebar #carbonads{text-align:center}#sidebar #carbonads .carbon-text{clear:both;display:block;padding:10px 0 0;color:#cfd0d1;font-size:12px;line-height:1.5em}#sidebar #carbonads .carbon-poweredby{display:block;color:#8d8f91;font-size:.9em;padding:10px 0 0}#hello-bar{max-height:0;background:#2e71ff;transition:max-height .15s;overflow:hidden;position:relative;will-change:height;pointer-events:auto;z-index:120}#hello-bar .hbBody{box-sizing:border-box;height:100%;padding:20px 0 20px 150px;color:#fbfbfb;display:grid;grid-template-columns:minmax(200px,1.5fr) minmax(200px,1fr) minmax(200px,1fr);grid-gap:10px}#hello-bar .closeHb{position:absolute;top:65px;left:15px;font-size:13px}#hello-bar .closeHb svg{height:16px;vertical-align:middle}#hello-bar a{color:#fbfbfb}#hello-bar h3{font-weight:600;margin-bottom:15px}#hello-bar li{font-size:13px;line-height:1.42em}#hello-bar .upgradeToPro{display:flex;width:90%;padding:10px 9px;border-radius:5px;transition:all .15s;background:#f3ca63;color:#39464e;box-shadow:0 4px 4px rgba(0,0,0,.1),0 0 1px rgba(0,0,0,.5);margin-top:20px;justify-content:center;align-items:center;flex-direction:column}#hello-bar .upgradeToPro svg{stroke:#39464e;height:20px;margin-right:7px;display:none}#hello-bar .upgradeToPro strong{font-size:13px;font-weight:600;text-align:center}#hello-bar .upgradeToPro em{font-size:11px;display:block;margin-top:6px;color:rgba(57,70,78,.8)}#hello-bar .upgradeToPro:hover{text-decoration:none;transform:translateY(-2px);box-shadow:0 6px 6px -2px rgba(0,0,0,.2),0 0 1px rgba(0,0,0,.5)}#hello-bar .upgradeToPro:hover strong{text-decoration:underline}#hello-bar .articles li{list-style:disc;margin-left:14px}#hello-bar .articles li span{color:hsla(0,0%,100%,.45);font-size:12px;margin-left:4px}#hello-bar .articles li:last-child{margin-top:10px;font-weight:600;list-style:none;margin-left:0}#hello-bar ul.boilerplates li{margin:0 10px 10px 0;display:inline-flex}#hello-bar ul.boilerplates a{display:block;padding:7px 9px;border-radius:4px;transition:all .15s;background:#fff;color:#39464e;box-shadow:0 4px 4px rgba(0,0,0,.1)}#hello-bar ul.boilerplates a:hover{text-decoration:none;transform:translateY(-2px);box-shadow:0 6px 6px -2px rgba(0,0,0,.2)}#hello-bar ul.boilerplates a span{background:#70d18c;color:#fff;font-size:11px;padding:3px 6px;border-radius:3px;margin-left:5px;font-weight:400}#hello-bar .bpAction{display:block;clear:both;padding-top:5px;font-size:13px}#hello-bar .bpAction svg{width:13px;margin-right:2px}#hello-bar .bpAction.hidden{display:none}body.fullyLoaded #actions,body.fullyLoaded #sidebar #s-cont{opacity:1;pointer-events:auto}body.fullyLoaded #loader{display:none}body.fullyLoaded #loader .loader,body.fullyLoaded #loader .shadow{animation:none}body.noSupport #no-support{display:block}body.noSupport #loader{display:none}body.noSupport #loader .loader,body.noSupport #loader .shadow{animation:none}body.hiddenSidebar #layout-container{grid-template-columns:0 1fr}body.hiddenSidebar #sidebar{display:none}body.hiddenSidebar #content #toggle-sidebar{left:0}body.hiddenSidebar #content #toggle-sidebar svg{transform:rotate(180deg)}.windowSettings{pointer-events:none;opacity:0;will-change:opacity,transform}#loader,#no-support{position:absolute;top:calc(50vh - 30px);left:calc(50% - 60px)}#loader .loader,#no-support .loader{width:120px;height:120px;z-index:100;animation:jump .8s ease-in infinite}#loader .loader path,#no-support .loader path{stroke:#fff}#loader .loader .cloud,#no-support .loader .cloud{fill:#2e71ff}#loader .shadow,#no-support .shadow{position:absolute;z-index:-1;top:80px;left:0;display:block;border-radius:100%;height:20px;width:120px;background:#000;opacity:.3;animation:scale-shadow .8s ease-in infinite}@keyframes jump{0%{transform:translateY(0) scale(1.15,.8)}20%{transform:translateY(-35px) scaleY(1.1)}50%{transform:translateY(-50px) scale(1)}80%{transform:translateY(-35px) scale(1)}to{transform:translateY(0) scale(1.15,.8)}}@keyframes scale-shadow{0%{opacity:.3;transform:scale(1)}50%{opacity:.2;transform:scale(.5)}to{opacity:.3;transform:scale(1)}}#no-support{position:absolute;top:calc(50vh - 30px);left:calc(50% - 60px);display:none;color:#fff;text-align:center;font-size:18px}#flash-messages{position:absolute;top:20px;left:0;right:0;z-index:100;display:flex;justify-content:center;opacity:1;transition:all .2s;will-change:opacity,transform}#flash-messages.hidden{pointer-events:none;opacity:0;transform:translateY(-10px) scale(.95)}#flash-messages li{box-shadow:0 10px 10px rgba(0,0,0,.05);padding:0 30px;height:60px;display:flex;color:#cfd0d1;border-radius:100px;font-weight:500;cursor:pointer;align-items:center;background:#2f333b}#flash-messages.draft li{cursor:default}#flash-messages .flashActions{margin-left:10px}#flash-messages .flashActions a{padding:8px 10px;background:#1f2227;border-radius:4px;margin-left:5px;color:#8d8f91;font-size:12px}#flash-messages .flashActions a:hover{color:#fbfbfb}#flash-messages svg{height:30px;margin-right:20px}#flash-messages .success svg{stroke:#70d18c}#flash-messages .error svg{stroke:#ff4d4d}#flash-messages .warning svg{stroke:#f3ca63}</style>

    <!-- <link id="skeleton-theme" rel="stylesheet" type="text/css" href="/css/dist-skeleton-dark.css?2e1a08e11df17968898e3ff29f7e6486935607e9"> -->

    <!-- 
      <link rel="stylesheet" type="text/css" href="/css/light.css?2e1a08e11df17968898e3ff29f7e6486935607e9">
     -->


    <link rel="icon" href="/img/favicon.png">

    <title>Edit fiddle - JSFiddle - Code Playground</title>
  </head>
  <body data-skeleton-url="/css/dist-skeleton-dark.css?2e1a08e11df17968898e3ff29f7e6486935607e9">
    <div id="hello-bar">
  <a class="closeHb" href="#">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Close
  </a>

  <div class="hbBody">
    <section>
      <h3>Start with a boilerplate:</h3>
      <ul class="boilerplates">
        <!-- <li><a href="/">Empty</a></li> -->
        <li><a href="/boilerplate/jquery">jQuery</a></li>
        <li><a href="/boilerplate/vue">Vue</a></li>
        <li><a href="/boilerplate/react-jsx">React</a></li>
        <li><a href="/boilerplate/react-jsx">React + JSX</a></li>
        <li><a href="/boilerplate/preact">Preact</a></li>
        <li><a href="/boilerplate/typescript">TypeScript</a></li>
        <li><a href="/boilerplate/coffeescript">CoffeeScript</a></li>
        <li><a href="/boilerplate/scss">SCSS</a></li>
        <li><a href="/boilerplate/responsive-css-grid">CSS Grid</a></li>
        <li><a href="/boilerplate/bootstrap">Bootstrap</a></li>
        <li><a href="/boilerplate/postcss">PostCSS</a></li>
      </ul>
      <div class="bpAction hidden">
        <svg version="1.1" viewBox="0 0 24 24">
          <g stroke-linecap="round" stroke-width="1.4" stroke="#fff" fill="none" stroke-linejoin="round">
            <path d="M17.94,17.94l-4.93766e-08,3.76374e-08c-1.70941,1.303 -3.79089,2.02486 -5.94,2.06c-7,0 -11,-8 -11,-8l-3.63017e-07,6.76516e-07c1.24389,-2.3181 2.96914,-4.34339 5.06,-5.94m3.84,-1.82l-5.75178e-07,1.34634e-07c0.688332,-0.161121 1.39306,-0.241661 2.1,-0.24c7,0 11,8 11,8l4.63472e-07,-8.67058e-07c-0.60702,1.13561 -1.33094,2.20473 -2.16,3.19m-6.72,-1.07l1.53825e-07,-1.65082e-07c-1.12951,1.21217 -3.02783,1.27918 -4.24,0.149667c-1.21217,-1.12951 -1.27918,-3.02783 -0.149667,-4.24c0.0481128,-0.0516337 0.0980326,-0.101554 0.149666,-0.149666"></path>
            <path d="M1,1l22,22"></path>
          </g>
        </svg>
        <a href="#">Show boilerplate bar less often?</a>
      </div>
    </section>

    <section>
      <h3>Links:</h3>
      <ul>
        <li>👍🏻 <a href="https://trello.com/b/LakLkQBW/jsfiddle-roadmap" target="_blank" rel="noopener">Roadmap</a> (vote for features)</li>
        <li>🐞 <a href="https://github.com/jsfiddle/jsfiddle-issues/issues" target="_blank" rel="noopener">Bug tracker</a></li>
        <!-- <li>☁️ <a href="https://jsfiddle.net/about" target="_blank" rel="noopener">About</a></li> -->
        <li>📙 <a href="https://docs.jsfiddle.net" target="_blank" rel="noopener">Docs</a></li>
        <li>🎛 <a href="http://status.jsfiddle.net" target="_blank" rel="noopener">Service status</a></li>
      </ul>
        <a class="upgradeToPro" href="/extra/" target="_blank">
          <svg version="1.1" viewBox="0 0 24 24">
            <path d="M12,2l3.09,6.26l6.91,1.01l-5,4.87l1.18,6.88l-6.18,-3.25l-6.18,3.25l1.18,-6.88l-5,-4.87l6.91,-1.01l3.09,-6.26Z" stroke-linecap="round" stroke-width="1.8" fill="none" stroke-linejoin="round"></path>
          </svg>
          <strong>Support JSFiddle and get extra features</strong>
          <em>Groups, Private fiddles, Ad-free &amp; more</em>
        </a>
    </section>

    <section>
      <h3>JSFiddle is for:</h3>
      <ul class="articles">
        <!-- <li><a href="https://julian.is/article/css-grid-at-scale/?utm_source=jsfiddle&amp;utm_medium=editor" target="_blank">Adopting CSS Grid at scale</a> <span>via julian.is</span></li>
        <li><a href="https://changelog.com/news/show-mdn-browser-compatibility-data-on-the-command-line-NRR2/?utm_source=jsfiddle&amp;utm_medium=editor" target="_blank">Show MDN browser compatibility data on the command line</a> <span>via changelog.com</span></li>
        <li>🙋 <a href="https://trello.com/b/VVZC5uQY/jsfiddle-links-inbox" target="_blank">Suggest a link</a></li> -->
        <li><a href="https://docs.jsfiddle.net/use-cases/demos-for-products-or-libraries" target="_blank" rel="noopener">Demos for docs</a></li>
        <li><a href="https://docs.jsfiddle.net/use-cases/bug-reporting-test-case-for-github-issues" target="_blank" rel="noopener">Bug reporting (test-case) for Github Issues</a></li>
        <li><a href="https://docs.jsfiddle.net/use-cases/answers-on-stack-overflow" target="_blank" rel="noopener">Presenting code answers on Stack Overflow</a></li>
        <li><a href="https://docs.jsfiddle.net/use-cases/live-code-collaboration" target="_blank" rel="noopener">Live code collaboration</a></li>
        <li><a href="https://docs.jsfiddle.net/use-cases/code-snippets-hosting" target="_blank" rel="noopener">Code snippets hosting</a></li>
        <li>... or just your humble code playground ✌🏻</li>
      </ul>
    </section>
  </div>
</div>


    <!-- <h1>Test your JavaScript, CSS, HTML or CoffeeScript online with JSFiddle code editor.</h1> -->
    <!-- <h2>online javascript editor, testing javascript online, online ide, online code editor, html, css, coffeescript, scss online editor</h2> -->
    <form method="post" id="show-result" target="result" action="http://fiddle.jshell.net/_display/" autocomplete="off">
      <input type="hidden" name="authenticity_token" value="RzjVtdlWK29aoci9rUV6yjuaKd6SLIFz+EENMn3so4pifrwAkqnr+vGN59JsQo1aO5dkExArqq0jBOQvD7HSpw==" />

      <header>
        <h1>
          <span class="title">JSFiddle</span>
          <div class="changelog-badge">
            <a title="JSFiddle" href="/">
              <svg width="46px" height="33px" viewBox="0 0 46 33">
                <g stroke-width="1.8" fill="none" fill-rule="evenodd">
                  <path d="M23.4888889,20.543316 C21.4404656,18.4187374 19.0750303,15.6666667 16.4832014,15.6666667 C13.8721947,15.6666667 11.7555556,17.6366138 11.7555556,20.0666667 C11.7555556,22.4967196 13.8721947,24.4666667 16.4832014,24.4666667 C18.8347252,24.4666667 19.9845474,23.0125628 20.6429148,22.312473" id="Oval-1" stroke-linecap="round"></path>
                  <path d="M22.5111111,19.5900174 C24.5595344,21.7145959 26.9249697,24.4666667 29.5167986,24.4666667 C32.1278053,24.4666667 34.2444444,22.4967196 34.2444444,20.0666667 C34.2444444,17.6366138 32.1278053,15.6666667 29.5167986,15.6666667 C27.1652748,15.6666667 26.0154526,17.1207706 25.3570852,17.8208603" id="Oval-1-Copy" stroke-linecap="round"></path>
                  <path d="M45,22.7331459 C45,19.1499462 42.7950446,16.079593 39.6628004,14.7835315 C39.6774469,14.5246474 39.7003932,14.2674038 39.7003932,14.0035978 C39.7003932,6.82243304 33.8412885,1 26.611593,1 C21.3985635,1 16.9102123,4.03409627 14.8051788,8.41527616 C13.7828502,7.62878013 12.503719,7.15547161 11.1134367,7.15547161 C7.77825654,7.15547161 5.07450503,9.84159999 5.07450503,13.1544315 C5.07450503,13.7760488 5.16938207,14.3779791 5.3477444,14.9418479 C2.74863428,16.4787471 1,19.2867709 1,22.5105187 C1,27.3287502 4.89630545,31.2367856 9.72803666,31.31094 L36.3341301,31.3109406 C41.1201312,31.3406346 45,27.4870665 45,22.7331459 L45,22.7331459 Z" stroke-linejoin="round"></path>
                </g>
              </svg>
            </a>
          </div>
        </h1>
          <div id="actions">
  <nav class="actionCont">
    <div class="actionItem">
      <a class="aiButton" id="run" title="Run (Command/Ctrl + Enter)" href="#run">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
        Run</a>
    </div>

    <!-- Logged in users don\'t need the info popup on saving/updating/forking -->
      <div class="actionItem dropdown ">
        <a class="aiButton dropdownTrigger" title="Save (Command/Ctrl + S)" href="#save" data-popover-trigger="saveInfo">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
          Save</a>
      </div>

      <div class="actionItem dropdown visible">
        <a class="aiButton dropdownTrigger" title="Fork" href="#fork" data-popover-trigger="forkInfo">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shuffle"><polyline points="16 3 21 3 21 8"></polyline><line x1="4" y1="20" x2="21" y2="3"></line><polyline points="21 16 21 21 16 21"></polyline><line x1="15" y1="15" x2="21" y2="21"></line><line x1="4" y1="4" x2="9" y2="9"></line></svg>
          Fork</a>
      </div>

    <div class="actionItem hidden ">
      <a class="aiButton" id="mark_favourite" title="Set as base" href="#set-as-base">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
        Set as base</a>
    </div>

    <div class="actionItem ">
      <a class="aiButton" id="collaborate" title="Collaborate" href="#collaborate">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        Collaborate</a>
    </div>

    <div class="actionItem dropdown visible ">
      <a class="aiButton dropdownTrigger" id="share" title="Embed" href="#embed" data-popover-trigger="embed">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
        Embed</a>
    </div> <!-- /actionItem -->

    <div id="app-updates" class="hidden"></div>

<script>
  var updates = [
    {
      id: 24,
      badge: "Change",
      title: "Fiddle listing shows latest version",
      body:  "The fiddle listings (Public, Private, Titled, etc) will now display latest versions instead of the ones saved as Base versions - this was causing more confusion than good, so we decided to change this long-standing behavior."
    },
    {
      id: 23,
      badge: "Update",
      title: "Evaluate code into the console",
      body:  "Custom Console beta is getting more stable and feature-rich. Just added the ability to evaluate code in the console.",
      highlight: {
        target: "#console"
      }
    },
    {
      id: 22,
      badge: "New",
      title: "Console in the editor",
      body:  "Introducing the first beta of the editor console - it\'s going to show you logs, warnings, errors without the need of opening full devtools.<br><br> Console is avaialble for all users during beta, after that it\'ll be available for JSFiddle supporters.",
      highlight: {
        target: "*[data-popover-trigger=\'editor-settings\']"
      }
    },
    {
      id: 21,
      badge: "New",
      title: "More user\'s social links (Dev.to, SO...)",
      body:  "You can add more of your social links `Settings / Social Media`, for Dev.to, Stack Overflow and Medium. These will be displayed on the profile section in Editor\'s sidebar and your public profile.",
    },
    {
      id: 20,
      badge: "Update",
      title: "Refactored Unsaved Drafts feature",
      body:  "Unsaved drafts feature is completely rewritten with 100% fewer bugs and 10x more maintainable codebase – as the author of the previous one, I had hard times figuring out what it does 🥴",
    }
  ]

  var UpdatesWidget = function(options){
    if (updates.length <= 0) return false

    var selectedItem  = 0
    var currentUpdate = updates[selectedItem]
    var lastSeenId    = window.localStorage.getItem("last_seen_update")
    var template      = {}

    var element = {
      updates:     document.querySelector("#app-updates"),
      highlighter: document.createElement("div")
    }

    // generic template for the widget
    template.title   = "<strong class=\'badge\'>#{badge}</strong> #{title}"
    template.body    = "<p>#{body}</p>"
    template.actions = "<div class=\'updateActions\'><a href=\'\' class=\'previous\'>Previous update</a><a href=\'\' class=\'dismiss\'>Got it</a></div>"
    template.full    = template.title + template.body + template.actions
    template.body    = "<div class=\'body\'>" + template.full + "</div>"
    template.update  = "<div class=\'bodyCont\'>" + template.body + "</div>"

    // inject the highlighter
    element.highlighter.id = "app-updates-highlighter"
    document.body.appendChild(element.highlighter)

    var dismissUpdate = function(event){
      event.preventDefault()
      event.stopPropagation()

      window.localStorage.setItem("last_seen_update", currentUpdate.id)
      element.updates.classList.add("hidden")

      Track.ui("Update dismissed")
    }

    var showHighlighter = function(event){
      event.preventDefault()
      event.stopPropagation()

      var target  = document.querySelector(currentUpdate.highlight.target)
      var rect    = target.getBoundingClientRect()
      var visible = !element.updates.classList.contains("hidden")

      element.highlighter.style.top    = rect.top + "px"
      element.highlighter.style.left   = rect.left + "px"
      element.highlighter.style.width  = rect.width + "px"
      element.highlighter.style.height = rect.height + "px"

      // only highlight before updater is dismissed
      if (visible){
        element.highlighter.classList.add("show")
      }
    }

    var hideHighlighter = function(event){
      element.highlighter.classList.remove("show")
    }

    var setUpdate = function(event){

      if (event){
        event.preventDefault()
        event.stopPropagation()

        selectedItem = selectedItem + 1

      } else {
        selectedItem = 0
      }

      currentUpdate = updates[selectedItem]

      // update the title
      var update = template.update
        .replace("#{badge}", currentUpdate.badge)
        .replace("#{title}", currentUpdate.title)
        .replace("#{body}",  currentUpdate.body)

      element.updates.innerHTML = update

      // dismiss update and save ID for future reference
      var dismiss = document.querySelector(".updateActions .dismiss")
      dismiss.addEventListener("click", dismissUpdate)

      var previous = document.querySelector(".updateActions .previous")
      previous.addEventListener("click", setUpdate)
    }

    setUpdate()

    // manage highlighter
    if (currentUpdate.highlight){
      element.updates.addEventListener("mouseover", showHighlighter)
      element.updates.addEventListener("mouseout", hideHighlighter)
    }

    // remove hidden class if user hasn\'t seen the latest update
    if (parseInt(lastSeenId) !== currentUpdate.id){
      element.updates.classList.remove("hidden")
    }
  }

  window.addEventListener("DOMContentLoaded", UpdatesWidget)
</script>

  </nav>

  <ul class="actionCont dropdown right">
  <li class="actionItem">
    <a class="aiButton dropdownTrigger" href="#" title="Editor settings" data-popover-trigger="editor-settings">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
      Settings
    </a>
  </li> <!-- /actionItem -->

    <li class="actionItem"><a class="aiButton" href="/user/login/">Sign in</a></li>


</ul>

<div class="dropdownCont hidden" data-popover-ref="editor-settings" data-popover-position="left">
  <div class="dcWrapper editorSettings">
    <div id="editor-options">
      <h3>Editor layout</h3>
      <div id="layout">
        <!-- HACK: for some reason the first input always gets the value of the last active
                   grid mode, for that reason a hack is to create an invisible first input -->
        <input style="display: none;" name="layout" type="radio" value="grid_invisible_hack">
        <label>
          <input name="layout" type="radio" value="1" checked>
          <span class="gridMode grid_1"></span>
          Classic
        </label>
        <label>
          <input name="layout" type="radio" value="2">
          <span class="gridMode grid_2"></span>
          Columns
        </label>
        <label>
          <input name="layout" type="radio" value="3">
          <span class="gridMode grid_3"></span>
          Bottom results
        </label>
        <label>
          <input name="layout" type="radio" value="4">
          <span class="gridMode grid_4"></span>
          Right results
        </label>
        <label>
          <input name="layout" type="radio" value="5">
          <span class="gridMode grid_5"></span>
          Tabs (columns)
        </label>
        <label>
          <input name="layout" type="radio" value="6">
          <span class="gridMode grid_6"></span>
          Tabs (rows)
        </label>
      </div>

      <h3>Console</h3>
      <div class="fieldsCont">
        <p class="proBadge">
          <label class="checkboxCont ">
            <input type="checkbox" name="editorConsole">
            <span class="checkbox"></span>
            Console in the editor <small>(beta)</small>
          </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="clearConsole">
            <span class="checkbox"></span>
            Clear console on run
          </label>
        </p>
      </div> <!-- /fieldsCont -->

      <h3>General</h3>
      <div class="fieldsCont">
        <!-- <p>
          <label class="checkboxCont">
            <input type="checkbox" name="darkTheme" checked>
            <span class="checkbox"></span>
            Dark theme
          </label>
        </p> -->
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="lineNumbers" checked>
            <span class="checkbox"></span>
            Line numbers
          </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="lineWrapping" checked>
            <span class="checkbox"></span>
            Wrap lines
          </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="indentWithTabs">
            <span class="checkbox"></span>
            Indent with tabs
          </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="codeHints">
            <span class="checkbox"></span>
            Code hinting (autocomplete) <small>(beta)</small>
          </label>
        </p>
      </div> <!-- /fieldsCont -->

      <div class="selectPairs">
        <div class="selectPair">
          <span class="label">Indent size:</span>
          <div class="selectCont">
            <select name="indentUnit">
              <option value="2">2 spaces</option>
              <option value="3">3 spaces</option>
              <option value="4">4 spaces</option>
            </select>
          </div>
        </div> <!-- /selectPair -->

        <div class="selectPair">
          <span class="label">Key map:</span>
          <div class="selectCont">
            <select name="keyMap">
              <option value="default">Default</option>
              <option value="sublime">Sublime Text</option>
              <!-- <option value="vim">VIM</option> -->
              <option value="emacs">EMACS</option>
            </select>
          </div>
        </div> <!-- /selectPair -->

        <div class="selectPair">
          <span class="label">Font size:</span>
          <div class="selectCont">
            <select name="fontSize">
              <option value="1">Default</option>
              <option value="2">Big</option>
              <option value="3">Bigger</option>
              <option value="4">Jabba</option>
            </select>
          </div>
        </div> <!-- /selectPair -->
      </div> <!-- /selectPairs -->

      <h3>Behavior</h3>
      <div class="fieldsCont">
        <p>
            <label class="checkboxCont disabled" data-title="Log in to use auto-running">
              <input type="checkbox" name="autoRun" disabled>
              <span class="checkbox"></span>
              Auto-run code
            </label>
        </p>
        <p>
            <label class="checkboxCont disabled" data-title="Log in to use auto-running">
              <input type="checkbox" name="autoRunValid" disabled>
              <span class="checkbox"></span>
              Only auto-run code that validates
            </label>
        </p>
        <p>
            <label class="checkboxCont disabled" data-title="Log in to use auto-saving">
              <input type="checkbox" name="autoSave" disabled>
              <span class="checkbox"></span>
              Auto-save code (bumps the version)
            </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="autoCloseTags" checked>
            <span class="checkbox"></span>
            Auto-close HTML tags
          </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="autoCloseBrackets" checked>
            <span class="checkbox"></span>
            Auto-close brackets
          </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="codeLinting" checked>
            <span class="checkbox"></span>
            Live code validation
          </label>
        </p>
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="matchTags">
            <span class="checkbox"></span>
            Highlight matching tags
          </label>
        </p>
      </div> <!-- /fieldsCont -->

      <h3>Boilerplates</h3>
      <div class="fieldsCont">
        <p>
          <label class="checkboxCont">
            <input type="checkbox" name="reduceHelloBar">
            <span class="checkbox"></span>
            Show boilerplates bar less often
          </label>
        </p>
      </div> <!-- /fieldsCont -->
    </div> <!-- /editor-options -->
  </div> <!-- /dcWrapper -->
</div> <!-- /dropdownCont -->

</div>

<div class="dropdownCont center hidden" data-popover-ref="saveInfo">
  <div class="dcWrapper info">
    <p><strong>Save anonymous (public) fiddle?</strong></p>
    <p>- Be sure not to include <strong>personal data</strong><br>- Do not include <strong>copyrighted material</strong></p>
    <p class="warning"><strong>Log in</strong> if you\'d like to <strong>delete this fiddle</strong> in the future.</p>
    <button id="save">Save</button>
  </div>
</div>

<div class="dropdownCont center hidden" data-popover-ref="forkInfo">
  <div class="dcWrapper info">
    <p><strong>Fork anonymous (public) fiddle?</strong></p>
    <p>- Be sure not to include <strong>personal data</strong><br>- Do not include <strong>copyrighted material</strong></p>
    <p class="warning"><strong>Log in</strong> if you\'d like to <strong>delete this fiddle</strong> in the future.</p>
    <button id="fork">Fork</button>
  </div>
</div>

<div class="dropdownCont center hidden" data-popover-ref="embed">
  <div class="dcWrapper embed">

    <div id="creator">
      <section>
        <h3>Tabs:</h3>
        <div class="inlineFields">
          <label class="inputCont_checkbox checkboxCont">
            <input type="checkbox" name="tabs" value="js" checked>
            <span class="checkbox"><i class="bts bt-check"></i></span> JavaScript
          </label>
          <label class="inputCont_checkbox checkboxCont">
            <input type="checkbox" name="tabs" value="html" checked>
            <span class="checkbox"><i class="bts bt-check"></i></span> HTML
          </label>
          <label class="inputCont_checkbox checkboxCont">
            <input type="checkbox" name="tabs" value="css" checked>
            <span class="checkbox"><i class="bts bt-check"></i></span> CSS
          </label>
          <label class="inputCont_checkbox checkboxCont">
            <input type="checkbox" name="tabs" value="result" checked>
            <span class="checkbox"><i class="bts bt-check"></i></span> Result
          </label>
        </div> <!-- /inlineFields -->
      </section>

      <section class="noborder">
        <h3>Visual:</h3>
        <div class="inlineFields">
          <label class="inputCont_checkbox checkboxCont">
            <input type="radio" name="skin" value="light" checked>
            <span class="radio"></span> Light
          </label>
          <label class="inputCont_checkbox checkboxCont">
            <input type="radio" name="skin" value="dark">
            <span class="radio"></span> Dark
          </label>
        </div> <!-- /inlineFields -->
        <label class="inputCont_text">
          <input type="text" name="accentColor" maxlength="7" placeholder="Accent color">
        </label>
        <label class="inputCont_text">
          <input type="text" name="fontColor" maxlength="7" placeholder="Font color">
        </label>
        <label class="inputCont_text">
          <input type="text" name="menuColor" maxlength="7" placeholder="Menu background">
        </label>
        <label class="inputCont_text">
          <input type="text" name="bodyColor" maxlength="7" placeholder="Code background">
        </label>
      </section>

      <section class="noborder">
        <h3>
          Embed snippet
          <a href="#" class="codeTypeToggle">Prefer iframe?</a>:
        </h3>
        <div class="embedCodeWrap">
<textarea class="embedCode" id="share_embedded_dropdown" data-view="embed" data-pattern-value=\'<script async src="{embedSrc}"></script>\'>
<script async src="{embedSrc}"></script>
</textarea>
        </div> <!-- /embedCodeWrap -->

        <div class="embedCodeWrap hidden">
<textarea class="embedCode" data-view="embedded" data-pattern-value=\'<iframe width="100%" height="300" src="{embedSrc}" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>\'>
<iframe width="100%" height="300" src="{embedSrc}" allowfullscreen allowpaymentrequest frameborder="0"></iframe>
</textarea>
          <p><strong>No autoresizing</strong> to fit the code</p><p><strong>Render blocking</strong> of the parent page</p>
        </div> <!-- /embedCodeWrap -->
      </section>
    </div> <!-- /creator -->

    <div id="preview"></div> <!-- /preview -->
  </div> <!-- /dcWrapper -->
</div> <!-- /dropdownCont -->

        <div id="progressbar"><div class="pb"></div></div>
      </header>

        <main id="layout-container">
          <div id="sidebar">
            <section id="s-cont">
              <div id="profile-segment" class="hidden">
                
              </div>

              <div class="sidebarItem">
  <h3 class="toggler" title="Posted on 04 12 2014">
    Fiddle meta
  </h3>
  <div class="body">
    <p>
      <input type="text" name="title" maxlength="255" value="" placeholder="Untitled fiddle">
    </p>
    <p>
      <textarea rows="10" cols="40" name="description" placeholder="No description"></textarea>
    </p>

    <p class="privateFiddleCont">
      <label class="checkboxCont proBadge">
        <input type="checkbox" name="is_private" value="1"  disabled>
        <span class="checkbox"></span>
        Private fiddle
        <a class="proBadgeSelf" href="/extra/" target="_blank">Extra</a>
      </label>
    </p>
  </div> <!-- /body -->
</div> <!-- /sidebarItem -->

              <div class="sidebarItem">
  <h3 class="toggler proBadge">
    Groups <a class="proBadgeSelf" href="/extra/" target="_blank">Extra</a>
  </h3>
  <div class="body">
    <ul class="groupsList toggleGroupPrivacy">
</ul> <!-- .groupsList -->


    <div id="choices-select"></div>
  </div> <!-- /body -->
</div> <!-- /sidebarItem -->

<script src="/js/Groups.js?2e1a08e11df17968898e3ff29f7e6486935607e9"></script>

              <script type="text/javascript">
  var resources = []
</script>

<div class="sidebarItem">
  <h3 class="toggler ">
    Resources <strong class="resourcesLabel">URL</strong> <strong class="resourcesLabel">cdnjs</strong>
    <em id="resource-counter" class="hidden">0</em>
  </h3>

  <div class="body">
    <ul id="external_resources_list">
    </ul>

    <div id="external-resources-form">
      <p>
        <input id="external_resource" type="text" name="q" value="" placeholder="JavaScript/CSS URL">
        <a id="add_external_resource" class="submit" href="#" title="Add resource">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
        </a>
      </p>
    </div>
    <input type="hidden" value="" id="external_resources_id" name="add_external_resources">

    <ul class="resourcesInfo">
      <li>Paste a direct CSS/JS URL</li>
      <li>Type a library name to fetch from CDNJS</li>
    </ul>
  </div> <!-- /body -->
</div> <!-- /sidebarItem -->

              <div class="sidebarItem">
  <h3 class="toggler">
    Async requests
  </h3>
  <div class="body">
    <p><code>/echo</code> simulates Async calls:<br>
      JSON: <code>/echo/json/</code><br>
      JSONP: <code>//jsfiddle.net/echo/jsonp/</code><br>
      HTML: <code>/echo/html/</code><br>
      XML: <code>/echo/xml/</code>
    </p>
    <p>See <a href=\'https://jsfiddle.gitbook.io/help/async-requests\' target=\'_new\'>docs</a> for more info.</p>
  </div> <!-- /body -->
</div> <!-- /sidebarItem -->

              <div class="sidebarItem">
  <h3 class="toggler">
    Other (links, license)
  </h3>
  <div class="body">
    <p class="maintainers">Created and maintained by <a title="Piotr\'s twitter" href="http://twitter.com/zalun" target="_blank" rel="noopener">Piotr</a> and <a title="UX and UI Designer" href="http://twitter.com/oskar" target="_blank" rel="noopener">Oskar</a>.</p>
    <p>Hosted on <a href="https://m.do.co/c/52e7a0ad196d" target="_blank" rel="noopener"><strong>DigitalOcean</strong></a></p>
    <p><strong></strong></p>
    <p>All code belongs to the poster and no license is enforced. JSFiddle or its authors are not responsible or liable for any loss or damage of any kind during the usage of provided code.</p>
    <p><strong>Links</strong></p>
    <p>
      <a href="https://github.com/jsfiddle/jsfiddle-issues/issues" target="_blank" rel="noopener">Bug tracker</a><br>
      <a href="https://trello.com/b/LakLkQBW/jsfiddle-roadmap" target="_blank" rel="noopener">Roadmap</a> (vote for features)<br>
      <a href="https://jsfiddle.net/about" target="_blank" rel="noopener">About</a><br>
      <a href="https://docs.jsfiddle.net" target="_blank" rel="noopener">Docs</a><br>
      <a href="http://status.jsfiddle.net" target="_blank" rel="noopener">Service status</a>
    </p>
  </div> <!-- /body -->
</div> <!-- /sidebarItem -->

<style media="screen">
  .maintainers {
    position: absolute;
    top: -900em;
    left: -900em;
  }
</style>

              <div class="sidebarItem">
  <h3 class="toggler">
    Removal request
  </h3>
  <div class="body">
    <ul id="manage-fiddle">
      <li>
        <a class="delete" href="https://airtable.com/shrm1ACZfg5PsTaUa?prefill_URL=https://jsfiddle.net/zhm5rjnz/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
          </svg>Submit a removal request
        </a>
      </li>
    </ul>
  </div> <!-- /body -->
</div> <!-- /sidebarItem -->

            </section>
              <section id="s-bottom">
                <div class="twitterCont">
    <!-- <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=jsfiddlenet" id="_carbonads_js"></script> -->
    <script async type="text/javascript" src="//crbcdn.jsfiddle.net/carbon.js?serve=CKYIEKQ7&placement=jsfiddlenet&amp;cd=crbsrv.jsfiddle.net" id="_carbonads_js"></script>
</div>

<div id="support-jsfiddle">
  <h3>Support the development of JSFiddle and get extra features ✌🏻</h3>
  <!-- <p>We\'ll always be free, but for our loyal users we also have some additional stuff:</p> -->
  <a href="/extra/">Become a supporter</a>
</div>

              </section>
          </div> <!-- #sidebar -->
          <div id="content">
            <div id="editor"></div>

<div class="windowSettings html hidden" data-panel="html" data-popover-ref="html">
  <h3>Language</h3>
<div class="selectCont">
  <select name="panel_html" class="panelChoice" id="panel_html_choice" data-panel_id="id_code_html" data-panel="html">
      <option data-mime-type="text/html" value="0"  selected>HTML</option>
      <option data-mime-type="text/x-haml" value="1" >HAML</option>
  </select>
  <label>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9" /></svg>
  </label>
</div> <!-- /selectCont -->

<h3>Doctype</h3>
<div class="selectCont">
  <select name="doctype">
      <option  id="dtd_XHTML 1.0 Strict" value="1">XHTML 1.0 Strict</option>
      <option  id="dtd_XHTML 1.0 Transitional" value="2">XHTML 1.0 Transitional</option>
      <option selected id="dtd_HTML 5" value="3">HTML 5</option>
      <option  id="dtd_HTML 4.01 Strict" value="4">HTML 4.01 Strict</option>
      <option  id="dtd_HTML 4.01 Transitional" value="5">HTML 4.01 Transitional</option>
      <option  id="dtd_HTML 4.01 Frameset" value="6">HTML 4.01 Frameset</option>
  </select>
  <label>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9" /></svg>
  </label>
</div>

<h3>Body tag</h3>
<p>
  <label>
    <input id="id_body_tag" type="text" name="body_tag" maxlength="255" value="">
  </label>
</p>

</div> <!-- /windowSettings -->

<div class="windowSettings js hidden" data-panel="js" data-popover-ref="js">
  <h3>Language</h3>
<div class="selectCont">
  <select name="panel_js" class="panelChoice" id="panel_js_choice" data-panel_id="id_code_js" data-panel="js">
      <option data-mime-type="text/javascript" value="0"  selected>JavaScript</option>
      <option data-mime-type="text/coffeescript" value="1" >CoffeeScript</option>
      <option data-mime-type="application/javascript" value="2" >JavaScript 1.7</option>
      <option data-mime-type="text/jsx" value="3" >Babel + JSX</option>
      <option data-mime-type="text/typescript" value="4" >TypeScript</option>
      <option data-mime-type="text/coffeescript" value="5" >CoffeeScript 2</option>
      <option data-mime-type="text/javascript" value="6" >Vue</option>
      <option data-mime-type="text/jsx" value="7" >React</option>
      <option data-mime-type="text/jsx" value="8" >Preact</option>
  </select>
  <label>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9" /></svg>
  </label>
</div> <!-- /selectCont -->

<h3>Frameworks &amp; Extensions</h3>
<div class="panelExtrasChoice">
  <div class="selectCont">
    <select name="js_lib" id="js_lib">
        <optgroup label="Alpine.js">
          <option value="409" >Alpine.js 2.1.2</option>
        <optgroup label="AngularJS">
          <option value="137" >AngularJS 1.1.1</option>
          <option value="180" >AngularJS 1.2.1</option>
          <option value="283" >AngularJS 1.4.8</option>
          <option value="281" >AngularJS 2.0.0-alpha.47</option>
        <optgroup label="Bonsai">
          <option value="120" >Bonsai 0.4.1</option>
        <optgroup label="Brick">
          <option value="176" >Brick edge</option>
        <optgroup label="CreateJS">
          <option value="170" >CreateJS 2013.09.25</option>
          <option value="279" >CreateJS 2015.05.21</option>
        <optgroup label="D3">
          <option value="134" >D3 3.x</option>
          <option value="386" >D3 4.13.0</option>
          <option value="397" >D3 5.9.2</option>
        <optgroup label="Dojo">
          <option value="87" >Dojo (nightly)</option>
          <option value="372" >Dojo 1.4.8</option>
          <option value="370" >Dojo 1.5.6</option>
          <option value="368" >Dojo 1.6.5</option>
          <option value="366" >Dojo 1.7.12</option>
          <option value="364" >Dojo 1.8.14</option>
          <option value="362" >Dojo 1.9.11</option>
          <option value="360" >Dojo 1.10.8</option>
          <option value="358" >Dojo 1.11.4</option>
          <option value="356" >Dojo 1.12.2</option>
        <optgroup label="Ember">
          <option value="190" >Ember (latest)</option>
        <optgroup label="Enyo">
          <option value="115" >Enyo (nightly)</option>
          <option value="116" >Enyo 2.0.1</option>
          <option value="121" >Enyo 2.1</option>
          <option value="145" >Enyo 2.2.0</option>
          <option value="214" >Enyo 2.4.0</option>
          <option value="238" >Enyo 2.5.1</option>
          <option value="299" >Enyo 2.7.0</option>
        <optgroup label="ExtJS">
          <option value="23" >ExtJS 3.1.0</option>
          <option value="109" >ExtJS 3.4.0</option>
          <option value="107" >ExtJS 4.1.0</option>
          <option value="80" >ExtJS 4.1.1</option>
          <option value="147" >ExtJS 4.2.0</option>
          <option value="258" >ExtJS 5.0.0</option>
          <option value="256" >ExtJS 5.1.0</option>
          <option value="338" >ExtJS 6.2.0</option>
        <optgroup label="FabricJS">
          <option value="250" >FabricJS 1.5.0</option>
          <option value="342" >FabricJS 1.7.7</option>
          <option value="378" >FabricJS 1.7.15</option>
          <option value="380" >FabricJS 1.7.20</option>
        <optgroup label="Glow">
        <optgroup label="Inferno">
          <option value="336" >Inferno 1.0.0-beta9</option>
        <optgroup label="JSBlocks">
          <option value="252" >JSBlocks (edge)</option>
        <optgroup label="KineticJS">
          <option value="124" >KineticJS 4.0.5</option>
          <option value="139" >KineticJS 4.3.1</option>
        <optgroup label="Knockout.js">
          <option value="104" >Knockout.js 2.0.0</option>
          <option value="117" >Knockout.js 2.1.0</option>
          <option value="122" >Knockout.js 2.2.1</option>
          <option value="163" >Knockout.js 2.3.0</option>
          <option value="172" >Knockout.js 3.0.0</option>
          <option value="388" >Knockout.js 3.4.2</option>
        <optgroup label="Lo-Dash">
          <option value="167" >Lo-Dash 2.2.1</option>
        <optgroup label="Minified">
          <option value="164" >Minified 1.0 beta1</option>
        <optgroup label="MithrilJS">
          <option value="273" >MithrilJS 0.2.0</option>
          <option value="390" >MithrilJS 1.1.6</option>
        <optgroup label="Mootools">
          <option value="59" >Mootools (nightly)</option>
          <option value="62" >Mootools 1.3.2</option>
          <option value="63" >Mootools 1.3.2 (compat)</option>
          <option value="95" >Mootools 1.4.5</option>
          <option value="96" >Mootools 1.4.5 (compat)</option>
          <option value="216" >Mootools 1.5.1</option>
          <option value="263" >Mootools 1.5.2</option>
          <option value="329" >Mootools 1.5.2 (compat)</option>
          <option value="325" >Mootools 1.6.0</option>
          <option value="327" >Mootools 1.6.0 (compat)</option>
        <optgroup label="No-Library">
          <option value="11" selected>No-Library (pure JS)</option>
        <optgroup label="OpenUI5">
          <option value="271" >OpenUI5 (latest, mobile)</option>
        <optgroup label="Paper.js">
          <option value="158" >Paper.js 0.22</option>
        <optgroup label="Pixi">
          <option value="315" >Pixi 3.0.11</option>
          <option value="331" >Pixi 4.0.0</option>
        <optgroup label="Processing.js">
          <option value="67" >Processing.js 1.2.3</option>
          <option value="81" >Processing.js 1.3.6</option>
          <option value="135" >Processing.js 1.4.1</option>
          <option value="206" >Processing.js 1.4.7</option>
        <optgroup label="Prototype">
          <option value="4" >Prototype 1.6.1.0</option>
          <option value="265" >Prototype 1.7.3</option>
        <optgroup label="RactiveJS">
          <option value="287" >RactiveJS 0.7.3</option>
        <optgroup label="Raphael">
          <option value="30" >Raphael 1.4</option>
          <option value="36" >Raphael 1.5.2</option>
          <option value="76" >Raphael 2.1.0</option>
        <optgroup label="React">
          <option value="159" >React 0.3.2</option>
          <option value="166" >React 0.4.0</option>
          <option value="184" >React 0.8.0</option>
          <option value="192" >React 0.9.0</option>
          <option value="285" >React 0.14.3</option>
        <optgroup label="RightJS">
          <option value="45" >RightJS 2.1.1</option>
          <option value="136" >RightJS 2.3.1</option>
        <optgroup label="Riot">
          <option value="382" >Riot 3.7.4</option>
        <optgroup label="Shipyard">
          <option value="99" >Shipyard (nightly)</option>
          <option value="105" >Shipyard 0.2</option>
        <optgroup label="Thorax">
          <option value="143" >Thorax 2.0.0rc3</option>
          <option value="174" >Thorax 2.0.0rc6</option>
        <optgroup label="Three.js">
          <option value="82" >Three.js r54</option>
          <option value="399" >Three.js 105</option>
        <optgroup label="Underscore">
          <option value="111" >Underscore 1.3.3</option>
          <option value="133" >Underscore 1.4.3</option>
          <option value="160" >Underscore 1.4.4</option>
          <option value="267" >Underscore 1.8.3</option>
        <optgroup label="Vue">
          <option value="236" >Vue (edge)</option>
          <option value="289" >Vue 1.0.12</option>
          <option value="344" >Vue 2.2.1</option>
        <optgroup label="WebApp Install">
          <option value="142" >WebApp Install 0.1</option>
        <optgroup label="XTK">
          <option value="106" >XTK edge</option>
        <optgroup label="YUI">
          <option value="9" >YUI 2.8.0r4</option>
          <option value="102" >YUI 3.5.0</option>
          <option value="118" >YUI 3.6.0</option>
          <option value="123" >YUI 3.7.3</option>
          <option value="130" >YUI 3.8.0</option>
          <option value="153" >YUI 3.10.1</option>
          <option value="182" >YUI 3.14.0</option>
          <option value="204" >YUI 3.16.0</option>
          <option value="230" >YUI 3.17.2</option>
        <optgroup label="Zepto">
          <option value="90" >Zepto 1.0rc1</option>
        <optgroup label="jQuery">
          <option value="46" >jQuery (edge)</option>
          <option value="131" >jQuery 1.9.1</option>
          <option value="248" >jQuery 2.1.3</option>
          <option value="319" >jQuery 2.2.4</option>
          <option value="376" >jQuery 3.2.1</option>
          <option value="384" >jQuery 3.3.1</option>
          <option value="401" >jQuery 3.4.1</option>
        <optgroup label="jQuery Slim">
          <option value="407" >jQuery Slim 3.2.1</option>
          <option value="405" >jQuery Slim 3.3.1</option>
          <option value="403" >jQuery Slim 3.4.1</option>
        <optgroup label="jTypes">
          <option value="165" >jTypes 2.1.0</option>
        <optgroup label="qooxdoo">
          <option value="127" >qooxdoo 2.0.3</option>
          <option value="126" >qooxdoo 2.1</option>
        <optgroup label="svg.js">
          <option value="395" >svg.js 2.6.5</option>
          <option value="393" >svg.js 2.7.1</option>
          <option value="391" >svg.js 3.0.5</option>
    </select>
    <label>
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9" /></svg>
    </label>
  </div>

  <ul id="js_dependency">
    
  </ul>
</div>

<h3>Framework &lt;script&gt; attribute</h3>
<p class="libraryTagAttributes">
  <label>
    <input id="id_js_lib_option" type="text" name="js_lib_option" maxlength="255" placeholder=\'ie. data-type=""\' value="" />
  </label>
</p>

</div> <!-- /windowSettings -->

<div class="windowSettings css hidden" data-panel="css" data-popover-ref="css">
  <h3>Language</h3>
<div class="selectCont">
  <select name="panel_css" class="panelChoice" id="panel_css_choice" data-panel_id="id_code_css" data-panel="css">
      <option data-mime-type="text/css" value="0" selected>CSS</option>
      <option data-mime-type="text/x-scss" value="1" >SCSS</option>
      <option data-mime-type="text/x-sass" value="2" >SASS</option>
      <option data-mime-type="text/css" value="4" >PostCSS (Stage 0+)</option>
  </select>
  <label>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9" /></svg>
  </label>
</div> <!-- /selectCont -->

<h3>Options</h3>
<p id="normalize_check">
  <label class="checkboxCont">
    <input type="checkbox" name="normalize_css" id="id_normalize_css" value="1" />
    <span class="checkbox"><i class="bts bt-check"></i></span> Normalized CSS
  </label>
</p>

</div> <!-- /windowSettings -->

<div id="problem-banner"></div>

          </div> <!-- #content -->

          
          <ul id="flash-messages" class="draft hidden">
  <li class="warning">
    <?xml version="1.0" encoding="UTF-8"?><svg version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke-linecap="round" stroke-width="2" fill="none" stroke-linejoin="round"><polyline points="23,4 23,10 17,10"></polyline><path d="M20.49 15l8.16053e-09-2.30983e-08c-1.65578 4.68667-6.79735 7.1437-11.484 5.48792 -4.68667-1.65578-7.1437-6.79735-5.48792-11.484 1.65578-4.68667 6.79735-7.1437 11.484-5.48792 1.26714.447675 2.41794 1.17344 3.36792 2.12402l4.63 4.36"></path></g></svg>
    This fiddle has previously unsaved changes.
    <span class="flashActions">
      <a id="apply-draft" href="#">Apply changes</a>
      <a id="discard-draft" href="#">Discard</a>
    </span>
  </li>
</ul>

        </main> <!-- #layout-container -->

      <div id="loader">
        <svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 33">
          <g stroke-width="1" fill="none" fill-rule="evenodd">
            <path class="cloud" d="M45,22.7331459 C45,19.1499462 42.7950446,16.079593 39.6628004,14.7835315 C39.6774469,14.5246474 39.7003932,14.2674038 39.7003932,14.0035978 C39.7003932,6.82243304 33.8412885,1 26.611593,1 C21.3985635,1 16.9102123,4.03409627 14.8051788,8.41527616 C13.7828502,7.62878013 12.503719,7.15547161 11.1134367,7.15547161 C7.77825654,7.15547161 5.07450503,9.84159999 5.07450503,13.1544315 C5.07450503,13.7760488 5.16938207,14.3779791 5.3477444,14.9418479 C2.74863428,16.4787471 1,19.2867709 1,22.5105187 C1,27.3287502 4.89630545,31.2367856 9.72803666,31.31094 L36.3341301,31.3109406 C41.1201312,31.3406346 45,27.4870665 45,22.7331459 L45,22.7331459 Z" stroke-linejoin="round"></path>

            <path class="loop" d="M25.3570852,17.8208603
            C26.0154526,17.1207706 27.1652748,15.6666667 29.5167986,15.6666667
            C32.1278053,15.6666667 34.2444444,17.6366138 34.2444444,20.0666667
            C34.2444444,22.4967196 32.1278053,24.4666667 29.5167986,24.4666667
            C26.9249697,24.4666667 24.5595344,21.7145959 23.4888889,20.543316
            C21.4404656,18.4187374 19.0750303,15.6666667 16.4832014,15.6666667
            C13.8721947,15.6666667 11.7555556,17.6366138 11.7555556,20.0666667
            C11.7555556,22.4967196 13.8721947,24.4666667 16.4832014,24.4666667
            C18.8347252,24.4666667 19.9845474,23.0125628 20.6429148,22.312473
            L25.3570852,17.8208603" stroke-linecap="round"></path>
          </g>
        </svg>
        <span class="shadow"></span>
      </div>

      <div id="no-support">IE is no longer supported 📠</div>
    </form>

    <script>
      window.addEventListener("DOMContentLoaded", function(){
        var loadEditor = function(){
          Layout.skin = "light"

          $extend(Layout, new Events())

          Actions = new EditorActions({
            example_id: EditorConfig.fiddle.id
          })


          Layout.render()

        }

        var themeHref = "/css/dist-editor-dark.css?2e1a08e11df17968898e3ff29f7e6486935607e9"
        var script = document.createElement("script")
        script.src = "/js/_dist-editor.js?2e1a08e11df17968898e3ff29f7e6486935607e9"

        var styleEditor    = document.createElement("link")
        styleEditor.rel    = "stylesheet"
        styleEditor.type   = "text/css"
        styleEditor.id     = "editor-theme"
        styleEditor.href   = themeHref
        document.body.appendChild(styleEditor)

        // Check if browser is supported
        if (window.navigator.userAgent.indexOf("Trident/") > 0){
            if (confirm("IE is not supported.\\n\\nLaunch fiddle in read-only mode?")){
              document.location.href = document.location.href + "show"
            } else {
              document.body.classList.add("noSupport")
            }
        } else {
          script.onload = loadEditor
          styleEditor.onload = function(){
            document.body.appendChild(script)
          }
        }
      })
    </script>

    

      <script src="//cdn.usefathom.com/script.js" site="UFKSJF" honor-dnt="true" auto="false"></script>
  <script>
    fathom.trackPageview({
      url: "/[fiddle]/"
    })
  </script>

  </body>
</html>
'
];
