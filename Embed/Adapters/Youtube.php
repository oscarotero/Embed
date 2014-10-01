<?php
/**
 * Adapter to always fetch SSL'ed embed code
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers;

class Youtube extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'https?://www.youtube.com/*'
        ));
    }

    /**
     * {@inheritDoc}
     */
    protected function initProviders(Request $request)
    {
        $this->request = $request;

        $this->providers = array(
            'Html' => new Providers\Html($request),
            'TwitterCards' => new Providers\TwitterCards($request),
            'OpenGraph' => new Providers\OpenGraph($request)
        );

        if ($this->providers['Html']->get('oembed')) {
            $request = new Request($request->getAbsolute($this->providers['Html']->get('oembed')) . "&scheme=https");
            $request->setParameter($this->options['oembedParameters']);
            $this->providers['OEmbed'] = new Providers\OEmbed($request);
        } elseif (($oEmbed = Providers\OEmbedImplementations::create($request, $this->options['oembedParameters']))) {
            $this->providers['OEmbed'] = $oEmbed;
        } elseif ($this->options['embedlyKey'] && ($oEmbed = Providers\Embedly::create($request, $this->options['embedlyKey']))) {
            $this->providers['OEmbed'] = $oEmbed;
        }

        $this->providers = array_reverse($this->providers);
    }
}
