<?php

namespace Embed\Adapters;

use Embed\Http\Request;

/**
 * Adapter to generate embed code from SassMeister.
 */
class Sassmeister extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        $response = $request->getResponse();

        return $response->isValid() && $response->getUri()->match([
            'sassmeister.com/gist/*',
            'www.sassmeister.com/gist/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = 480;
        $id = $this->getResponse()->getUri()->getDirectoryPosition(1);

        return "<p class=\"sassmeister\" data-gist-id=\"{$id}\" data-height=\"480\" data-theme=\"tomorrow\">".
               "<a href=\"http://sassmeister.com/gist/{$id}\">Play with this gist on SassMeister.</a>".
               '</p>'.
               '<script src="http://cdn.sassmeister.com/js/embed.js" async></script>';
    }
}
