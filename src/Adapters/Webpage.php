<?php
/**
 * Adapter to provide all information from any webpage
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers;

class Webpage extends Adapter implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->addProvider('oembed', new Providers\OEmbed());
        $this->addProvider('opengraph', new Providers\OpenGraph());
        $this->addProvider('twittercards', new Providers\TwitterCards());
        $this->addProvider('dcterms', new Providers\Dcterms());
        $this->addProvider('sailthru', new Providers\Sailthru());
        $this->addProvider('html', new Providers\Html());
    }
}
