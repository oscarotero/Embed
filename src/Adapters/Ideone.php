<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter to generate embed code from ideone.com.
 */
class Ideone extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUri()->match([
            'ideone.com/*',
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
        $path = '/e.js'.$uri->getPath();

        return Utils::script($uri->getAbsolute($path));
    }
}
