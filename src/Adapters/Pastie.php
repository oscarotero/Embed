<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Utils;

/**
 * Adapter to generate embed code from pastie.org.
 */
class Pastie extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        $response = $request->getResponse();

        return $response->isValid() && $response->getUri()->match([
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

        $path = '/'.$this->getResponse()->getUri()->getDirectoryPosition(1).'.js';

        return Utils::script($this->getResponse()->getUri()->getAbsolute($path));
    }
}
