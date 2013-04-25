<?php

namespace Embed\Providers\OEmbed;

use Embed\Providers;

class GitHubGist extends \Embed\Providers\OEmbedImplementationAbstract {
    public static function getEndPoint()
    {
        return 'https://github.com/api/oembed';
    }
    public static function getPatterns()
    {
        return array('https://gist.github.com/*');
    }
}
