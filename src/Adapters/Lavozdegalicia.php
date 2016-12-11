<?php

namespace Embed\Adapters;

use Embed\Request;

/**
 * Adapter to provide all information from lavozdegalicia.es that needs a special query parameter to generate a session cookie.
 */
class Lavozdegalicia extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->getResponse()->getUri()->match([
            'http://www.lavozdegalicia.es/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = [])
    {
        parent::__construct($request, $config);

        $this->createRequest($this->getRequest()->getUri()->withQueryParameter('piano_d', '1'));
    }
}
