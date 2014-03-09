<?php
/**
 * Adapter to get the embed code from cadenaser.com
 */
namespace Embed\Adapters;

class Rtve extends Webpage implements AdapterInterface
{
    public function getCode()
    {
        $Dom = $this->Url->getHtmlContent();

        if (($Textarea = $Dom->getElementById('embed_area')) && ($Object = $Textarea->getElementsByTagName('object')) && $Object->length) {
            return $Object->item(0)->C14N();
        }

        return parent::getCode();
    }

    public function getDescription()
    {
        $Dom = $this->Url->getHtmlContent();

        if (($Textarea = $Dom->getElementById('embed_area')) && ($Metas = $Textarea->getElementsByTagName('meta'))) {
            foreach ($Metas as $Meta) {
                if ($Meta->hasAttribute('itemprop') && ($Meta->getAttribute('itemprop') === 'description') && $Meta->hasAttribute('content') && !empty($Meta->getAttribute('content'))) {
                    return $Meta->getAttribute('content');
                }
            }
        }

        return parent::getDescription();
    }
}
