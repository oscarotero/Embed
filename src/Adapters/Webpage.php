<?php

namespace Embed\Adapters;

use Embed\Request;
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
        return $request->isValid();
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        $this->addProvider('oembed', new Providers\OEmbed());
        $this->addProvider('opengraph', new Providers\OpenGraph());
        $this->addProvider('twittercards', new Providers\TwitterCards());
        $this->addProvider('dcterms', new Providers\Dcterms());
        $this->addProvider('sailthru', new Providers\Sailthru());
        $this->addProvider('html', new Providers\Html());
    }
}
