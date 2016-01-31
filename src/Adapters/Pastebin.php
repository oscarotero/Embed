<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;

/**
 * Adapter to generate embed code from pastebin.
 */
class Pastebin extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'http://pastebin.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $embed_url = 'http://pastebin.com/embed_iframe.php?i='.($this->request->getQueryParameter('i') ?: $this->request->getDirectoryPosition(0));

        return Utils::iframe($embed_url);
    }
}
