<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to provide all information from lavozdegalicia.es that needs a special query parameter to generate a session cookie.
 */
class Lavozdegalicia extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUri()->match([
            'www.lavozdegalicia.es/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        parent::init();

        $uri = $this->getResponse()->getStartingUri();

        $this->response = $this->getDispatcher()->dispatch($uri->withQueryParameter('piano_d', '1'));
    }
}
