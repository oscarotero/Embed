<?php

namespace Embed\Adapters;

use Embed\Providers;

/**
 * Adapter to provide all information from any webpage.
 */
class Webpage extends Adapter
{
    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        $this->providers = [
            'oembed' => new Providers\OEmbed($this),
            'opengraph' => new Providers\OpenGraph($this),
            'linkpulse' => new Providers\Linkpulse($this),
            'twittercards' => new Providers\TwitterCards($this),
            'dcterms' => new Providers\Dcterms($this),
            'sailthru' => new Providers\Sailthru($this),
            'html' => new Providers\Html($this),
        ];
    }
}
