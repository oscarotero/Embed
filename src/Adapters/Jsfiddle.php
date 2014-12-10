<?php
/**
 * Adapter to fix some issues from jsfiddle
 */
namespace Embed\Adapters;

use Embed\Viewers;

class Jsfiddle extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        $url = $this->getUrl();

        $embed_url = $url.((substr($url, -1) === '/') ? 'embedded/' : '/embedded/');

        return Viewers::iframe($embed_url);
    }
}
