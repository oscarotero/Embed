<?php
/**
 * Adapter to get some info from rtve.es
 */
namespace Embed\Adapters;

class Rtve extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $dom = $this->request->getHtmlContent();

        if (($textarea = $dom->getElementById('embed_area')) && ($object = $textarea->getElementsByTagName('object')) && $object->length) {
            return $object->item(0)->C14N();
        }

        return parent::getCode();
    }


    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {
        $dom = $this->request->getHtmlContent();

        if (($textarea = $dom->getElementById('embed_area')) && ($metas = $textarea->getElementsByTagName('meta'))) {
            foreach ($metas as $meta) {
                if ($meta->hasAttribute('itemprop') && ($meta->getAttribute('itemprop') === 'description') && $meta->hasAttribute('content') && !empty($meta->getAttribute('content'))) {
                    return $meta->getAttribute('content');
                }
            }
        }

        return parent::getDescription();
    }
}
