<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Providers;

/**
 * Adapter to provide all information from any webpage.
 */
class Webpage extends Adapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid();
    }

    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = [])
    {
        parent::__construct($request, $config);

        $this->providers = [
            'oembed' => new Providers\OEmbed($this),
            'opengraph' => new Providers\OpenGraph($this),
            'twittercards' => new Providers\TwitterCards($this),
            'dcterms' => new Providers\Dcterms($this),
            'sailthru' => new Providers\Sailthru($this),
            'html' => new Providers\Html($this),
        ];
    }
}
