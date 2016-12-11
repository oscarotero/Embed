<?php

namespace Embed\Adapters;

use Embed\Http\Request;
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
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
            'pastebin.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $uri = $this->getResponse()->getUri();
        $embed_url = 'http://pastebin.com/embed_iframe.php?i='.($uri->getQueryParameter('i') ?: $uri->getDirectoryPosition(0));

        return Utils::iframe($embed_url);
    }
}
