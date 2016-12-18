<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter to generate embed code from pastebin.
 */
class Pastebin extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUri()->match([
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
