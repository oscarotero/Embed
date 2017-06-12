<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter to generate embed code from pastebin.
 */
class Pastebin extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
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

        $url = $this->getResponse()->getUrl();
        $embed_url = 'http://pastebin.com/embed_iframe.php?i='.($url->getQueryParameter('i') ?: $url->getDirectoryPosition(0));

        return Utils::iframe($embed_url);
    }
}
