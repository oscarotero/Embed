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
        $path = '/embed_js' . $url->getPath();

        return Utils::script($this->getResponse()->getUrl()->getAbsolute($path));
    }
}
