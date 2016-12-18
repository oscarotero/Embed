<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to provide all information from lavozdegalicia.es that needs a special query parameter to generate a session cookie.
 */
class Lavozdegalicia extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'www.lavozdegalicia.es/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        parent::init();

        $url = $this->getResponse()->getStartingUrl();

        $this->response = $this->getDispatcher()->dispatch($url->withQueryParameter('piano_d', '1'));
    }
}
