<?php
/**
 * Adapter to generate embed code from pastebin
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Viewers;

class Pastebin extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'http://pastebin.com/*',
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $embed_url = 'http://pastebin.com/embed_iframe.php?i='.($this->request->url->getParameter('i') ?: $this->request->url->getDirectory(0));

        return Viewers::iframe($embed_url);
    }
}
