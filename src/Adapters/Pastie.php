<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter to generate embed code from pastie.org.
 */
class Pastie extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'pastie.org/pastes/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $path = '/'.$this->getResponse()->getUrl()->getDirectoryPosition(1).'.js';

        return Utils::script($this->getResponse()->getUrl()->getAbsolute($path));
    }
}
