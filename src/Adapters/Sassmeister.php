<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to generate embed code from SassMeister.
 */
class Sassmeister extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
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
        $id = $this->getResponse()->getUrl()->getDirectoryPosition(1);

        return "<p class=\"sassmeister\" data-gist-id=\"{$id}\" data-height=\"480\" data-theme=\"tomorrow\">".
               "<a href=\"http://sassmeister.com/gist/{$id}\">Play with this gist on SassMeister.</a>".
               '</p>'.
               '<script src="http://cdn.sassmeister.com/js/embed.js" async></script>';
    }
}
