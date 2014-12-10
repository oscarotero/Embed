<?php
/**
 * Adapter to get the embed code from cadenaser.com
 */
namespace Embed\Adapters;

class Cadenaser extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $dom = $this->request->getHtmlContent();

        foreach ($dom->getElementsByTagName('div') as $div) {
            if ($div->hasAttribute('class') && ($div->getAttribute('class') === 'llevatelo')) {
                $input = $div->getElementsByTagName('input');

                if ($input->length && $input->item(0)->hasAttribute('value')) {
                    return $input->item(0)->getAttribute('value');
                }
            }
        }
    }
}
