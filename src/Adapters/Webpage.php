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
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;

        $this->addProvider('Html', new Providers\Html());
        $this->addProvider('TwitterCards', new Providers\TwitterCards());
        $this->addProvider('OpenGraph', new Providers\OpenGraph());
        $this->addProvider('OEmbed', new Providers\OEmbed());
        $this->addProvider('Dcterms', new Providers\Dcterms());
        $this->addProvider('Sailthru', new Providers\Sailthru());
    }
}
