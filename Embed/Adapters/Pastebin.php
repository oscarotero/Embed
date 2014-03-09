<?php
/**
 * Adapter to generate embed code from pastebin
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Viewers;

class Pastebin extends Webpage implements AdapterInterface
{
    public static function check(Url $Url)
    {
        return $Url->match(array(
            'http://pastebin.com/*'
        ));
    }

    public function getCode()
    {
        $embed_url = 'http://pastebin.com/embed_iframe.php?i='.($this->Url->getParameter('i') ?: $this->Url->getDirectory(0));

        return Viewers::iframe($embed_url);
    }
}
