<?php
declare(strict_types = 1);

return [
    'authorName' => 'oscarotero',
    'authorUrl' => 'https://github.com/oscarotero',
    'cms' => null,
    'code' => [
        'html' => '<link rel="stylesheet" href="https://github.githubassets.com/assets/gist-embed-33b98015caf26cfcbee6ce1a5d1fc768.css"></link><div id="gist7749998" class="gist"> <div class="gist-file"> <div class="gist-data"> <div class="js-gist-file-update-container js-task-list-container file-box"> <div id="file-git-cheatsheet-sh" class="file my-2"> <div itemprop="text" class="Box-body p-0 blob-wrapper data type-shell "> <table class="highlight tab-size js-file-line-container" data-tab-size="8" data-paste-markdown-skip> <tr> <td id="file-git-cheatsheet-sh-L1" class="blob-num js-line-number" data-line-number="1"></td> <td id="file-git-cheatsheet-sh-LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Undo latest commit</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L2" class="blob-num js-line-number" data-line-number="2"></td> <td id="file-git-cheatsheet-sh-LC2" class="blob-code blob-code-inner js-file-line">git reset --soft HEAD^</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L3" class="blob-num js-line-number" data-line-number="3"></td> <td id="file-git-cheatsheet-sh-LC3" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L4" class="blob-num js-line-number" data-line-number="4"></td> <td id="file-git-cheatsheet-sh-LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Undo the changes of a commit (creating a new commit)</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L5" class="blob-num js-line-number" data-line-number="5"></td> <td id="file-git-cheatsheet-sh-LC5" class="blob-code blob-code-inner js-file-line">git revert <span class="pl-k">&lt;</span>commit<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L6" class="blob-num js-line-number" data-line-number="6"></td> <td id="file-git-cheatsheet-sh-LC6" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L7" class="blob-num js-line-number" data-line-number="7"></td> <td id="file-git-cheatsheet-sh-LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Undo latest merge (before push)</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L8" class="blob-num js-line-number" data-line-number="8"></td> <td id="file-git-cheatsheet-sh-LC8" class="blob-code blob-code-inner js-file-line">git reset --merge ORIG_HEAD</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L9" class="blob-num js-line-number" data-line-number="9"></td> <td id="file-git-cheatsheet-sh-LC9" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L10" class="blob-num js-line-number" data-line-number="10"></td> <td id="file-git-cheatsheet-sh-LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Merge a branch using the version of the current branch in case of conflicts</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L11" class="blob-num js-line-number" data-line-number="11"></td> <td id="file-git-cheatsheet-sh-LC11" class="blob-code blob-code-inner js-file-line">git merge <span class="pl-k">&lt;</span>branch<span class="pl-k">&gt;</span> -s ours</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L12" class="blob-num js-line-number" data-line-number="12"></td> <td id="file-git-cheatsheet-sh-LC12" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L13" class="blob-num js-line-number" data-line-number="13"></td> <td id="file-git-cheatsheet-sh-LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Discard changes for a particular file after commit</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L14" class="blob-num js-line-number" data-line-number="14"></td> <td id="file-git-cheatsheet-sh-LC14" class="blob-code blob-code-inner js-file-line">git reset HEAD <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L15" class="blob-num js-line-number" data-line-number="15"></td> <td id="file-git-cheatsheet-sh-LC15" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L16" class="blob-num js-line-number" data-line-number="16"></td> <td id="file-git-cheatsheet-sh-LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Unstage the current staged changes</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L17" class="blob-num js-line-number" data-line-number="17"></td> <td id="file-git-cheatsheet-sh-LC17" class="blob-code blob-code-inner js-file-line">git reset</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L18" class="blob-num js-line-number" data-line-number="18"></td> <td id="file-git-cheatsheet-sh-LC18" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L19" class="blob-num js-line-number" data-line-number="19"></td> <td id="file-git-cheatsheet-sh-LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Create, fetch a remote branch and switch to it</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L20" class="blob-num js-line-number" data-line-number="20"></td> <td id="file-git-cheatsheet-sh-LC20" class="blob-code blob-code-inner js-file-line">git checkout --track <span class="pl-k">&lt;</span>remote<span class="pl-k">&gt;</span>/<span class="pl-k">&lt;</span>branch<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L21" class="blob-num js-line-number" data-line-number="21"></td> <td id="file-git-cheatsheet-sh-LC21" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L22" class="blob-num js-line-number" data-line-number="22"></td> <td id="file-git-cheatsheet-sh-LC22" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove a file from git but not from disc</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L23" class="blob-num js-line-number" data-line-number="23"></td> <td id="file-git-cheatsheet-sh-LC23" class="blob-code blob-code-inner js-file-line">git rm --cached <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L24" class="blob-num js-line-number" data-line-number="24"></td> <td id="file-git-cheatsheet-sh-LC24" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L25" class="blob-num js-line-number" data-line-number="25"></td> <td id="file-git-cheatsheet-sh-LC25" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Reapply an old commit again</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L26" class="blob-num js-line-number" data-line-number="26"></td> <td id="file-git-cheatsheet-sh-LC26" class="blob-code blob-code-inner js-file-line">git cherry-pick <span class="pl-k">&lt;</span>commit<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L27" class="blob-num js-line-number" data-line-number="27"></td> <td id="file-git-cheatsheet-sh-LC27" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L28" class="blob-num js-line-number" data-line-number="28"></td> <td id="file-git-cheatsheet-sh-LC28" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Ignore the changes of a file</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L29" class="blob-num js-line-number" data-line-number="29"></td> <td id="file-git-cheatsheet-sh-LC29" class="blob-code blob-code-inner js-file-line">git update-index --assume-unchanged <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L30" class="blob-num js-line-number" data-line-number="30"></td> <td id="file-git-cheatsheet-sh-LC30" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L31" class="blob-num js-line-number" data-line-number="31"></td> <td id="file-git-cheatsheet-sh-LC31" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Not ignore the changes of a file</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L32" class="blob-num js-line-number" data-line-number="32"></td> <td id="file-git-cheatsheet-sh-LC32" class="blob-code blob-code-inner js-file-line">git update-index --no-assume-unchanged <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L33" class="blob-num js-line-number" data-line-number="33"></td> <td id="file-git-cheatsheet-sh-LC33" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L34" class="blob-num js-line-number" data-line-number="34"></td> <td id="file-git-cheatsheet-sh-LC34" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> List all &quot;assume-unchanged&quot; files</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L35" class="blob-num js-line-number" data-line-number="35"></td> <td id="file-git-cheatsheet-sh-LC35" class="blob-code blob-code-inner js-file-line">git ls-files -v<span class="pl-k">|</span>grep <span class="pl-s"><span class="pl-pds">&#39;</span>^h<span class="pl-pds">&#39;</span></span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L36" class="blob-num js-line-number" data-line-number="36"></td> <td id="file-git-cheatsheet-sh-LC36" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L37" class="blob-num js-line-number" data-line-number="37"></td> <td id="file-git-cheatsheet-sh-LC37" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Display who did the latest change in each line (ignoring whitespaces)</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L38" class="blob-num js-line-number" data-line-number="38"></td> <td id="file-git-cheatsheet-sh-LC38" class="blob-code blob-code-inner js-file-line">git blame <span class="pl-k">&lt;</span>filename<span class="pl-k">&gt;</span> -w</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L39" class="blob-num js-line-number" data-line-number="39"></td> <td id="file-git-cheatsheet-sh-LC39" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L40" class="blob-num js-line-number" data-line-number="40"></td> <td id="file-git-cheatsheet-sh-LC40" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove all local branches removed in remote</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L41" class="blob-num js-line-number" data-line-number="41"></td> <td id="file-git-cheatsheet-sh-LC41" class="blob-code blob-code-inner js-file-line">git fetch origin --prune</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L42" class="blob-num js-line-number" data-line-number="42"></td> <td id="file-git-cheatsheet-sh-LC42" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L43" class="blob-num js-line-number" data-line-number="43"></td> <td id="file-git-cheatsheet-sh-LC43" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove untracked local files</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L44" class="blob-num js-line-number" data-line-number="44"></td> <td id="file-git-cheatsheet-sh-LC44" class="blob-code blob-code-inner js-file-line">git clean -f</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L45" class="blob-num js-line-number" data-line-number="45"></td> <td id="file-git-cheatsheet-sh-LC45" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L46" class="blob-num js-line-number" data-line-number="46"></td> <td id="file-git-cheatsheet-sh-LC46" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove untracked local files and folders</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L47" class="blob-num js-line-number" data-line-number="47"></td> <td id="file-git-cheatsheet-sh-LC47" class="blob-code blob-code-inner js-file-line">git clean -fd</td> </tr> <tr> <td id="file-git-cheatsheet-sh-L48" class="blob-num js-line-number" data-line-number="48"></td> <td id="file-git-cheatsheet-sh-LC48" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L49" class="blob-num js-line-number" data-line-number="49"></td> <td id="file-git-cheatsheet-sh-LC49" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove remote branch</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L50" class="blob-num js-line-number" data-line-number="50"></td> <td id="file-git-cheatsheet-sh-LC50" class="blob-code blob-code-inner js-file-line">git push <span class="pl-k">&lt;</span>remote<span class="pl-k">&gt;</span> --delete <span class="pl-k">&lt;</span>branch<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L51" class="blob-num js-line-number" data-line-number="51"></td> <td id="file-git-cheatsheet-sh-LC51" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L52" class="blob-num js-line-number" data-line-number="52"></td> <td id="file-git-cheatsheet-sh-LC52" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Go to an old commit</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L53" class="blob-num js-line-number" data-line-number="53"></td> <td id="file-git-cheatsheet-sh-LC53" class="blob-code blob-code-inner js-file-line">git read-tree <span class="pl-k">&lt;</span>commit<span class="pl-k">&gt;</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L54" class="blob-num js-line-number" data-line-number="54"></td> <td id="file-git-cheatsheet-sh-LC54" class="blob-code blob-code-inner js-file-line"> </td> </tr> <tr> <td id="file-git-cheatsheet-sh-L55" class="blob-num js-line-number" data-line-number="55"></td> <td id="file-git-cheatsheet-sh-LC55" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Use the ~/.gitignore file to ignore globally certain files</span></td> </tr> <tr> <td id="file-git-cheatsheet-sh-L56" class="blob-num js-line-number" data-line-number="56"></td> <td id="file-git-cheatsheet-sh-LC56" class="blob-code blob-code-inner js-file-line">git config --global core.excludesfile <span class="pl-s"><span class="pl-pds">&#39;</span>~/.gitignore<span class="pl-pds">&#39;</span></span></td> </tr> </table> </div> </div> </div> </div> <div class="gist-meta"> <a href="https://gist.github.com/oscarotero/7749998/raw/0ea827d8ec07706f290f9e157706251cdc25894a/Git-cheatsheet.sh" style="float:right">view raw</a> <a href="https://gist.github.com/oscarotero/7749998#file-git-cheatsheet-sh">Git-cheatsheet.sh</a> hosted with &#10084; by <a href="https://github.com">GitHub</a> </div> </div> </div>',
        'width' => null,
        'height' => null,
        'ratio' => null
    ],
    'description' => 'GitHub Gist: instantly share code, notes, and snippets.',
    'favicon' => 'https://github.githubassets.com/favicons/favicon.svg',
    'feeds' => [
        'https://gist.github.com/oscarotero.atom'
    ],
    'icon' => null,
    'image' => 'https://github.githubassets.com/images/modules/gists/gist-og-image.png',
    'keywords' => [],
    'language' => 'en',
    'languages' => [],
    'license' => null,
    'providerName' => 'Gist',
    'providerUrl' => 'https://gist.github.com',
    'publishedTime' => '2013-12-02 14:10:20',
    'redirect' => null,
    'title' => 'Git-cheatsheet.sh',
    'url' => 'https://gist.github.com/oscarotero/7749998',
    'linkedData' => [],
    'oEmbed' => [],
    'api' => [
        'description' => '',
        'public' => true,
        'created_at' => '2013-12-02T14:10:20.000Z',
        'files' => [
            'Git-cheatsheet.sh'
        ],
        'owner' => 'oscarotero',
        'div' => '<div id="gist7749998" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-git-cheatsheet-sh" class="file my-2">
    

  <div itemprop="text" class="Box-body p-0 blob-wrapper data type-shell  ">
      
<table class="highlight tab-size js-file-line-container" data-tab-size="8" data-paste-markdown-skip>
      <tr>
        <td id="file-git-cheatsheet-sh-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-git-cheatsheet-sh-LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Undo latest commit</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-git-cheatsheet-sh-LC2" class="blob-code blob-code-inner js-file-line">git reset --soft HEAD^</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-git-cheatsheet-sh-LC3" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-git-cheatsheet-sh-LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Undo the changes of a commit (creating a new commit)</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-git-cheatsheet-sh-LC5" class="blob-code blob-code-inner js-file-line">git revert <span class="pl-k">&lt;</span>commit<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-git-cheatsheet-sh-LC6" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-git-cheatsheet-sh-LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Undo latest merge (before push)</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-git-cheatsheet-sh-LC8" class="blob-code blob-code-inner js-file-line">git reset --merge ORIG_HEAD</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-git-cheatsheet-sh-LC9" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-git-cheatsheet-sh-LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Merge a branch using the version of the current branch in case of conflicts</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-git-cheatsheet-sh-LC11" class="blob-code blob-code-inner js-file-line">git merge <span class="pl-k">&lt;</span>branch<span class="pl-k">&gt;</span> -s ours</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="file-git-cheatsheet-sh-LC12" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="file-git-cheatsheet-sh-LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Discard changes for a particular file after commit</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="file-git-cheatsheet-sh-LC14" class="blob-code blob-code-inner js-file-line">git reset HEAD <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="file-git-cheatsheet-sh-LC15" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="file-git-cheatsheet-sh-LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Unstage the current staged changes</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="file-git-cheatsheet-sh-LC17" class="blob-code blob-code-inner js-file-line">git reset</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="file-git-cheatsheet-sh-LC18" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="file-git-cheatsheet-sh-LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Create, fetch a remote branch and switch to it</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="file-git-cheatsheet-sh-LC20" class="blob-code blob-code-inner js-file-line">git checkout --track <span class="pl-k">&lt;</span>remote<span class="pl-k">&gt;</span>/<span class="pl-k">&lt;</span>branch<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="file-git-cheatsheet-sh-LC21" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="file-git-cheatsheet-sh-LC22" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove a file from git but not from disc</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="file-git-cheatsheet-sh-LC23" class="blob-code blob-code-inner js-file-line">git rm --cached <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="file-git-cheatsheet-sh-LC24" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="file-git-cheatsheet-sh-LC25" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Reapply an old commit again</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="file-git-cheatsheet-sh-LC26" class="blob-code blob-code-inner js-file-line">git cherry-pick <span class="pl-k">&lt;</span>commit<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="file-git-cheatsheet-sh-LC27" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="file-git-cheatsheet-sh-LC28" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Ignore the changes of a file</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="file-git-cheatsheet-sh-LC29" class="blob-code blob-code-inner js-file-line">git update-index --assume-unchanged <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="file-git-cheatsheet-sh-LC30" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="file-git-cheatsheet-sh-LC31" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Not ignore the changes of a file</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="file-git-cheatsheet-sh-LC32" class="blob-code blob-code-inner js-file-line">git update-index --no-assume-unchanged <span class="pl-k">&lt;</span>file<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="file-git-cheatsheet-sh-LC33" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="file-git-cheatsheet-sh-LC34" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> List all &quot;assume-unchanged&quot; files</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="file-git-cheatsheet-sh-LC35" class="blob-code blob-code-inner js-file-line">git ls-files -v<span class="pl-k">|</span>grep <span class="pl-s"><span class="pl-pds">&#39;</span>^h<span class="pl-pds">&#39;</span></span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="file-git-cheatsheet-sh-LC36" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="file-git-cheatsheet-sh-LC37" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Display who did the latest change in each line (ignoring whitespaces)</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="file-git-cheatsheet-sh-LC38" class="blob-code blob-code-inner js-file-line">git blame <span class="pl-k">&lt;</span>filename<span class="pl-k">&gt;</span> -w</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="file-git-cheatsheet-sh-LC39" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="file-git-cheatsheet-sh-LC40" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove all local branches removed in remote</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="file-git-cheatsheet-sh-LC41" class="blob-code blob-code-inner js-file-line">git fetch origin --prune</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="file-git-cheatsheet-sh-LC42" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="file-git-cheatsheet-sh-LC43" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove untracked local files</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="file-git-cheatsheet-sh-LC44" class="blob-code blob-code-inner js-file-line">git clean -f</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="file-git-cheatsheet-sh-LC45" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="file-git-cheatsheet-sh-LC46" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove untracked local files and folders</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="file-git-cheatsheet-sh-LC47" class="blob-code blob-code-inner js-file-line">git clean -fd</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="file-git-cheatsheet-sh-LC48" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="file-git-cheatsheet-sh-LC49" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Remove remote branch</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="file-git-cheatsheet-sh-LC50" class="blob-code blob-code-inner js-file-line">git push <span class="pl-k">&lt;</span>remote<span class="pl-k">&gt;</span> --delete <span class="pl-k">&lt;</span>branch<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="file-git-cheatsheet-sh-LC51" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="file-git-cheatsheet-sh-LC52" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Go to an old commit</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="file-git-cheatsheet-sh-LC53" class="blob-code blob-code-inner js-file-line">git read-tree <span class="pl-k">&lt;</span>commit<span class="pl-k">&gt;</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="file-git-cheatsheet-sh-LC54" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="file-git-cheatsheet-sh-LC55" class="blob-code blob-code-inner js-file-line"><span class="pl-c"><span class="pl-c">#</span> Use the ~/.gitignore file to ignore globally certain files</span></td>
      </tr>
      <tr>
        <td id="file-git-cheatsheet-sh-L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="file-git-cheatsheet-sh-LC56" class="blob-code blob-code-inner js-file-line">git config --global core.excludesfile <span class="pl-s"><span class="pl-pds">&#39;</span>~/.gitignore<span class="pl-pds">&#39;</span></span></td>
      </tr>
</table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/oscarotero/7749998/raw/0ea827d8ec07706f290f9e157706251cdc25894a/Git-cheatsheet.sh" style="float:right">view raw</a>
        <a href="https://gist.github.com/oscarotero/7749998#file-git-cheatsheet-sh">Git-cheatsheet.sh</a>
        hosted with &#10084; by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>
',
        'stylesheet' => 'https://github.githubassets.com/assets/gist-embed-33b98015caf26cfcbee6ce1a5d1fc768.css'
    ],
    'allLinkedData' => []
];
