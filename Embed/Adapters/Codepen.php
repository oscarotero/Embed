<?php
/**
 * Adapter to get the embed code from codepen
 */
namespace Embed\Adapters;

use Embed\Viewers;
use Embed\Request;

class Codepen extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'http://codepen.io/*/pen/*'
        ));
    }


    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $embed_url = str_replace('/pen/', '/embed/', $this->getUrl());

        return Viewers::iframe($embed_url, 600, 300);
    }


    /**
     * {@inheritDoc}
     */
    public function getProviderName()
    {
        return 'CodePen';
    }
}
