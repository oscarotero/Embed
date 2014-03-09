<?php
/**
 * Adapter to get the embed code from cadenaser.com
 */
namespace Embed\Adapters;

class Cadenaser extends Webpage implements AdapterInterface
{
    public function getCode()
    {
        $Dom = $this->Url->getHtmlContent();

        foreach ($Dom->getElementsByTagName('div') as $Div) {
            if ($Div->hasAttribute('class') && ($Div->getAttribute('class') === 'llevatelo')) {
                $Input = $Div->getElementsByTagName('input');

                if ($Input->length && $Input->item(0)->hasAttribute('value')) {
                    return $Input->item(0)->getAttribute('value');
                }
            }
        }
    }
}
