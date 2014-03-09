<?php
/**
 * Adapter to get the embed code from codepen
 */
namespace Embed\Adapters;

use Embed\Viewers;
use Embed\Url;

class Codepen extends Webpage implements AdapterInterface
{
    public static function check(Url $Url)
    {
        return $Url->match(array(
            'http://codepen.io/*/pen/*'
        ));
    }

    public function getCode()
    {
        $embed_url = str_replace('/pen/', '/embed/', $this->getUrl());

        return Viewers::iframe($embed_url, 600, 300);
    }

    public function getProviderName()
    {
        return 'CodePen';
    }
}
